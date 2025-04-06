<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        return view('web/home/home', [
            "tittle" => "home",
            "assets" => "home",
        ]);
    }

    public function authenthicateUser($id)
    {
        return view('web/profiles/profile', [
            'profile' => Profile::getUserbyId($id),
            'tittle' => 'profile',
            'assets' => 'profiles'
        ]);
    }
}
