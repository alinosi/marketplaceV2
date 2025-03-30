<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin/dashboard/dashboard', [
            'profiles' => Profile::getAlluser(),
            "tittle" => "profile",
            "assets" => "profiles"
        ]);
    }
}