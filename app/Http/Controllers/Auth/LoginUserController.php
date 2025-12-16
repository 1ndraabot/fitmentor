<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class LoginUserController extends Controller
{
    public function loginView (Request $request)
    {
        return view('loginUser');
    }

    public function loginControl (Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $user = DB::selectOne(
            "SELECT au.id_akun, u.nama FROM akun_user au JOIN user u ON au.id_akun = u.id_akun WHERE au.email = ? AND au.password = ? LIMIT 1",
            [$request->email, $request->password]
        );

        if ($user) {
            session([
                'login' => true,
                'id_user' => $user->id_akun,
                'nama_user' => $user->nama
            ]);

            return redirect('/find');
        }

        return back()->with('error', 'email atau password salah');
    }
}
