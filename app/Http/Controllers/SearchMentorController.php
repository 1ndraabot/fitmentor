<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchMentorController extends Controller
{
    public function index(Request $request)
    {
        $idUser = session('id_user');

        if (!$idUser) {
            return redirect('/loginUser')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $sql_query = "SELECT m.id_mentor, m.nama AS nama_mentor, s.spesialisasi AS kategori, g.id_gigs, g.harga AS harga_gig, g.judul_gigs AS nama_gig, g.deskripsi AS deskripsi_gig FROM mentor m LEFT JOIN mentor_spesialisasi ms ON m.id_mentor = ms.id_mentor LEFT JOIN spesialisasi s ON ms.id_spesialisasi = s.id_spesialisasi LEFT JOIN gigs g ON m.id_mentor = g.id_mentor WHERE 1=1";
        $params = [];

        if($request->filled('kategori')) {
            $sql_query .= " AND s.spesialisasi = ?";
            $params[] = $request->kategori;
        }

        $mentors = DB::select($sql_query, $params);

        return view('cariMentor', compact('mentors'));
    }

}
