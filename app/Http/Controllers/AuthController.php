<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function ViewLogin()
    {
        return view('login');
    }

    public function Login(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)){
            $request->session()->regenerate();
            return redirect('/');
        }

        return redirect()->back()->with('error', 'Email atau Password Salah');
        
    }

    public function Logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
        $request->session()->regenerateToken();
 
        return redirect('/login')->with('sukses', 'Anda Berhasil Logout');
    }

    public function ViewRegister()
    {
        return view('register');
    }

    public function Register(Request $request)
    {
        $cek_user = User::where('email', $request->email)->first();

        if ($cek_user) {
            return redirect()->back()->with('error', 'Email Sudah Terdaftar');
        }

        $user = new User();
        $user->name  = $request->name;
        $user->email  = $request->email;
        $user->password  = $request->password;
        $user->save();

        return redirect()->route('login')->with('success', 'Registrasi Anda Berhasil');
    }
}
