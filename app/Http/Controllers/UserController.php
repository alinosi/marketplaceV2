<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class UserController extends Controller
{
    public function index()
    {
        return view('web/profiles/profile', [
            'profiles' => Profile::getAlluser(),
            "tittle" => "profile",
            "assets" => "profiles"
        ]);
    }

    public function byId($id) 
    {
        return view('web/profiles/profile', [
            'profile' => Profile::getUserbyId($id),
            "tittle" => "profile",
            "assets" => "profiles"
        ]);
    }
}
