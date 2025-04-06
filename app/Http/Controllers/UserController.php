<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class UserController extends Controller
{
    public function byId($id) 
    {
        return view('web/profiles/profile', [
            'profile' => Profile::getUserbyId($id),
            "tittle" => "profile",
            "assets" => "profiles"
        ]);
    }

    public function authenthicatedUser() 
    {
        if (isset($_SESSION['user']) || isset($_COOKIE['user'])) {
            $id = $_SESSION['user']['id'];
            return view('web/profiles/profile', [
                'profile' => Profile::getUserbyId($id),
                "tittle" => "profile",
                "assets" => "profiles"
            ]);
        } else {
            return view('web/auth/login', [
                "tittle" => "login",
                "assets" => "login"
            ]);
        }
    }
}