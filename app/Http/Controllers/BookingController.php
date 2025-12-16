<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function show($id)
    {
        $idUser = session('id_user');

        if (!$idUser) {
            return redirect('/loginUser')
                ->with('error', 'Silakan login terlebih dahulu');
        }

        $result = DB::select(
            "
                SELECT 
                    g.id_gigs,
                    g.judul_gigs,
                    g.deskripsi,
                    g.harga,
                    m.nama AS nama_mentor
                FROM gigs g
                JOIN mentor m ON g.id_mentor = m.id_mentor
                WHERE g.id_gigs = ?
            ",
            [$id]
        );

        // karena DB::select() mengembalikan ARRAY
        $gig = $result[0] ?? null;

        if (!$gig) {
            abort(404, 'Gigs tidak ditemukan');
        }

        return view('detailBooking', compact('gig'));
    }
}
