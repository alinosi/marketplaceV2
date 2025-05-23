<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class HomeController extends Controller
{
    public function index()
    {
        return view('web/home/home', [
            "title" => "home",
            "assets" => "home"
        ]);
    }
}