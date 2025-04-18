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
            "title" => "profile",
            "assets" => "profiles"
        ]);
    }
}