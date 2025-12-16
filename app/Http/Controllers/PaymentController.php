<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function index()
    {
        $gigs = DB::select("SELECT id_gigs, judul_gigs, harga FROM gigs");
        $metode_pembayaran = DB::select("SELECT id_metode, nama_metode FROM metode_pembayaran");

        return view('payment', compact('gigs', 'metode_pembayaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'gigs_id' => 'required|exists:gigs,id_gigs',
            'metode_pembayaran' => 'required|exists:metode_pembayaran,id_metode',
            'jumlah_pembayaran' => 'required|numeric'
        ]);

        $idUser = session('id_user');

        if (!$idUser) {
            return redirect('/loginUser')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $user = DB::selectOne("SELECT id_user FROM user WHERE id_akun = ?",[$idUser]);
        $idUser = $user->id_user;

        DB::insert("
            INSERT INTO pembayaran
            (id_user, id_gigs, id_metode, jumlah_pembayaran, tanggal_pembayaran, status_pembayaran)
            VALUES (?, ?, ?, ?, ?, ?)
        ", [
            $idUser,
            $request->gigs_id,
            $request->metode_pembayaran,
            $request->jumlah_pembayaran,
            now(),
            'sukses'
        ]);

        return redirect()->route('payment.index')
            ->with('success', 'Payment berhasil disimpan');
    }


    // public function index()
    // {
    //     // Ambil semua gigs
    //     $gigs = DB::select("SELECT * FROM gigs");

    //     // Ambil metode pembayaran
    //     $metode_pembayaran = DB::select("SELECT * FROM metode_pembayaran");

    //     return view('payment', compact('gigs', 'metode_pembayaran'));
    // }

    // public function store(Request $request)
    // {
    //     // Validasi input
    //     $request->validate([
    //     'gigs_id' => 'required|integer',
    //     'metode_pembayaran' => 'required|integer',
    // ]);

    // $idUser = session('id_user');

    // if (!$idUser) {
    //     return redirect('/loginUser')->with('error', 'Silakan login terlebih dahulu');
    // }

    // // Ambil harga gigs
    // $gig = DB::selectOne(
    //     "SELECT harga FROM gigs WHERE id_gigs = ?",
    //     [$request->gigs_id]
    // );

    // if (!$gig) {
    //     return back()->with('error', 'Gigs tidak ditemukan');
    // }

    // DB::insert("
    //     INSERT INTO pembayaran
    //     (id_user, id_gigs, id_metode, jumlah_pembayaran, tanggal_pembayaran, status_pembayaran)
    //     VALUES (?, ?, ?, ?, ?, ?)
    // ", [
    //     $idUser,
    //     $request->gigs_id,
    //     $request->metode_pembayaran,
    //     $gig->harga,
    //     now(),
    //     'pending'
    // ]);

    // return redirect()->route('payment.index')
    //     ->with('success', 'Payment successfully processed!');
    // }
}
