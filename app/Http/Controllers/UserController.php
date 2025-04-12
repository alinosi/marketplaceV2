<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function byId($id) 
    {
        return view('web/profiles/profile', [
            'profile' => User::find($id),
            "tittle" => "profile",
            "assets" => "profiles"
        ]);
    }

    public function nonAuthenticatedUser() 
    {
        return view('auth/login', [
            "tittle" => "login",
            "assets" => "login"
        ]);
    }
}