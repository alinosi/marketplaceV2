<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class AdminController extends Controller
{

    public function index()
    {
        return view('admin/login', [
            "title" => "Admin Login",
            "assets" => "admin"
        ]);
    }

    public function dashoboard()
    {
        return view('admin/dashboard/dashboard', [
            'profiles' => User::all(),
            "title" => "profile",
            "assets" => "profiles"
        ]);
    }
}