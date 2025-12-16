<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AddGig extends Controller
{
    // Menampilkan form tambah gigs
    public function showForm()
    {
        // Cek login mentor
        if (!session('login')) {
            return redirect('/loginMentor');
        }

        return view('buatGigs'); // form kosong
    }

    // Menyimpan gigs baru
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul_gigs' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'durasi' => 'required|string|max:50',
            'kategori_olahraga' => 'required|string|max:100',
        ]);

        $idAkun = session('id_akun');

        if (!$idAkun) {
            return redirect('/loginMentor');
        }

        // Ambil id_mentor berdasarkan id_akun
        $mentor = DB::selectOne("SELECT id_mentor FROM mentor WHERE id_akun = ?", [$idAkun]);

        if (!$mentor) {
            return back()->with('error', 'Mentor tidak ditemukan');
        }

        // Insert gigs
        DB::insert("
            INSERT INTO gigs (id_mentor, judul_gigs, harga, deskripsi, durasi, kategori_olahraga)
            VALUES (?, ?, ?, ?, ?, ?)
        ", [
            $mentor->id_mentor,
            $request->judul_gigs,
            $request->harga,
            $request->deskripsi,
            $request->durasi,
            $request->kategori_olahraga
        ]);

        return redirect('/mentorHome')->with('success', 'Gigs berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul_gigs' => 'required|string|max:255',
            'harga' => 'required|numeric',
            'durasi' => 'required|string|max:50',
            'kategori_olahraga' => 'required|string|max:100',
        ]);

        $idAkun = session('id_akun');

        if (!$idAkun) {
            return redirect('/loginMentor');
        }

        $mentor = DB::selectOne(
            "SELECT id_mentor FROM mentor WHERE id_akun = ?",
            [$idAkun]
        );

        if (!$mentor) {
            return redirect('/mentorHome')->with('error', 'Mentor tidak ditemukan');
        }

        DB::update("
            UPDATE gigs
            SET judul_gigs = ?, harga = ?, deskripsi = ?, durasi = ?, kategori_olahraga = ?
            WHERE id_gigs = ? AND id_mentor = ?
        ", [
            $request->judul_gigs,
            $request->harga,
            $request->deskripsi,
            $request->durasi,
            $request->kategori_olahraga,
            $id,
            $mentor->id_mentor
        ]);

        return redirect('/mentorHome')->with('success', 'Gigs berhasil diperbarui');
    }
}
