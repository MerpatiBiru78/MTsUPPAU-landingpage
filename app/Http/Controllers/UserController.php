<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function login(){
        $data['title'] ="Selamat Datang Silahkan Login atau Daftar";
        return view('pages.login', $data);
    }
    public function regis_action(Request $request){
        
        $request->validate([
            'nik'=>'required|numeric|digits:16',
            'nama'=>'required',
            'email'=>'required|email',
            'pass1'=>'required|regex:/^[aBAB09]+$/',
            'pass2'=>'required|same:pass1',
        ]);

        // $user = new User([
        //     'nik'=>$request->nik,
        //     'name'=>$request->nama,
        //     'email'=>$request->email,
        //     'password'=>Hash::make(($request->pass1)),
        // ]);

        DB::table('users')->insert(
            ['nik'=>$request->nik,
            'name'=>$request->nama,
            'email'=>$request->email,
            'password'=>Hash::make(($request->pass1))]
        );

        return redirect()->route('login')->with('success','pendaftaran berhasil hore!!!');
    }

}
