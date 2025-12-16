<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditGig extends Controller
{
    // Tampilkan form edit gigs
    public function edit($id)
    {
        // Cek login mentor
        if (!session('login')) {
            return redirect('/loginMentor');
        }

        $idAkun = session('id_akun');

        // Ambil mentor
        $mentor = DB::selectOne(
            "SELECT id_mentor FROM mentor WHERE id_akun = ?",
            [$idAkun]
        );

        if (!$mentor) {
            return redirect('/mentorHome')->with('error', 'Mentor tidak ditemukan');
        }

        // Ambil gigs berdasarkan id + id_mentor (biar aman)
        $gig = DB::selectOne(
            "SELECT * FROM gigs WHERE id_gigs = ? AND id_mentor = ?",
            [$id, $mentor->id_mentor]
        );

        if (!$gig) {
            return redirect('/mentorHome')->with('error', 'Gigs tidak ditemukan');
        }

        return view('editGigs', compact('gig'));
    }

    // Update gigs
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
