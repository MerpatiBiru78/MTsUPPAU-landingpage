<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('after_auth');
        } else {
            $data['title'] = "Selamat Datang Silahkan Login atau Daftar";
            return view('pages.login', $data);
        }
    }

    public function regis_action(Request $request)
    {

        $request->validate([
            'nik' => 'required|numeric|digits:16',
            'nama' => 'required',
            'email' => 'required|email:rfc,dns',
            'pass1' => 'required|regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
            'pass2' => 'required|same:pass1',
        ]);

        $user = new User([
            'nik' => $request->nik,
            'name' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make(($request->pass1)),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'pendaftaran berhasil hore!!!');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|regex:/^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{8,}$/',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->route('after_auth');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function after_auth()
    {
        if (Auth::check()) {
            $data['title'] = "Selamat Datang Silahkan Login atau Daftar";
            $data['user'] = Auth::User();
            return view('pages.admin', $data);
        } else {
            return redirect()->route('home');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
