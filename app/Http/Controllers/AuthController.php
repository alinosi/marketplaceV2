<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth/login', [
            'title' => 'Login',
            'assets' => 'login'
        ]);
    }

    public function register()
    {
        return view('auth/register', [
            'title' => 'Register',
            'assets' => 'register'
        ]);
    }

    public function destroy()
    {
        return redirect()->route('home')->with('success', 'Logout Berhasil');
    }
}
