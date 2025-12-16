<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeMentor extends Controller
{
    public function index()
    {
        // ambil id_akun dari session
        $idAkun = session('id_akun');

        if (!$idAkun) {
            return redirect('/loginMentor');
        }

        $sql = "
            SELECT 
                g.id_gigs,
                g.judul_gigs,
                g.harga,
                g.durasi,
                g.kategori_olahraga
            FROM mentor m
            JOIN gigs g ON m.id_mentor = g.id_mentor
            WHERE m.id_akun = ?
        ";

        $gigs = DB::select($sql, [$idAkun]);

        return view('mentorHome', compact('gigs'));
    }

    public function delete($id)
    {
        // pastikan mentor sudah login
        if (!session('login')) {
            return redirect('/loginMentor');
        }

        // PURE SQL delete (aman, pakai binding)
        DB::delete(
            "DELETE g FROM gigs g
            JOIN mentor m ON g.id_mentor = m.id_mentor
            WHERE g.id_gigs = ?
            AND m.id_akun = ?",
            [$id, session('id_akun')]
        );

        return redirect('/mentorHome')
            ->with('success', 'Gigs berhasil dihapus');
    }

    public function index2(Request $request)
    {
        $sql_query = "SELECT m.id_mentor, m.nama AS nama_mentor, m.tahun_pengalaman, m.status_aktif, s.spesialisasi AS kategori, g.harga AS harga_gig, g.judul_gigs AS nama_gig, g.deskripsi AS deskripsi_gig FROM mentor m LEFT JOIN mentor_spesialisasi ms ON m.id_mentor = ms.id_mentor LEFT JOIN spesialisasi s ON ms.id_spesialisasi = s.id_spesialisasi LEFT JOIN gigs g ON m.id_mentor = g.id_mentor WHERE 1=1";
        $params = [];

        if($request->filled('kategori')) {
            $sql_query .= " AND s.spesialisasi = ?";
            $params[] = $request->kategori;
        }

        $mentors = DB::select($sql_query, $params);

        return view('mentorHome', compact('mentors'));
    }

    public function edit(Request $request) 
    {
        //
    }
}
