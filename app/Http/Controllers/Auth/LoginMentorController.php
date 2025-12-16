<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginMentorController extends Controller
{
    public function loginView (Request $request)
    {
        return view('loginMentor');
    }

    public function loginControl (Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $mentor = DB::selectOne(
            "SELECT am.id_akun, m.nama FROM akun_mentor am JOIN mentor m ON am.id_akun = m.id_akun WHERE am.email = ? AND am.password = ? LIMIT 1",
            [$request->email, $request->password]
        );

        if ($mentor) {
            session([
                'login' => true,
                'id_akun' => $mentor->id_akun,
                'nama_mentor' => $mentor->nama
            ]);

            return redirect('/mentorHome');
        }

        return back()->with('error', 'email atau password salah');
    }
}
