<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function index()
    {
        // Ambil user login dari session
        $idUser = session('id_user');

        if (!$idUser) {
            return redirect('/loginUser')
                ->with('error', 'Silakan login terlebih dahulu');
        }
        
        

        // Ambil riwayat pembayaran user
        $riwayat = DB::select("
            SELECT 
                p.tanggal_pembayaran,
                p.jumlah_pembayaran,
                p.status_pembayaran,
                g.judul_gigs,
                m.nama AS nama_mentor,
                mp.nama_metode
            FROM pembayaran p
            JOIN gigs g ON p.id_gigs = g.id_gigs
            JOIN mentor m ON g.id_mentor = m.id_mentor
            JOIN metode_pembayaran mp ON p.id_metode = mp.id_metode
            WHERE p.id_user = ?
            ORDER BY p.tanggal_pembayaran DESC
        ", [$idUser]);

        return view('riwayat', compact('riwayat'));
    }
}
