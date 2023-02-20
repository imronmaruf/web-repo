<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');

    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $kredensial = $request->only('email','password');
        if (Auth::attempt($kredensial)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard')-> withSuccess('Log In Berhasil');
        }
        return redirect("Login")-> withSucces('Login Gagal');
    }

    public function registration()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'ni' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6'
        ]);
        $data = $request->all();
        $data['password'] = Hash::make($data['password']);
        User::create($data);

        return redirect('/login')->withSuccess('Anda Berhasil Login');
    }


    public function logout(Request $request){
        Session::flush();
        Auth::logout();
        $request->session()->regenerateToken();

        return redirect('login');
    }



}
