<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
            return redirect()->intended('dashboard.pages.dashboard')-> withSuccess('Log In Berhasil');
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
            'name' => 'require',
            'email' => 'require|email|unique:users',
            'password' => 'require|min:6'
        ]);
        $data = $request->all();
        $check = $this->create($data);

        return redirect('dashboard.pages.dashboard')->withSuccess('Anda Berhasil Login');
    }

    public function create (array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()

    {
        if(Auth::check())
        {
            return view('dashboard.pages.dashboard');
        }

        return redirect("login")->withSuccess('Anda tidak terdaftar');

    }

    public function logout(){
        Session::flush();
        Auth::logout();

        return redirect('login');
    }



}
