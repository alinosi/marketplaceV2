<?php

use Illuminate\Support\Facades\Route;

function getuserdata() {
    return $data = [
        'name' => 'M Thoriqul Fadli',
        'email' => 'mthoriqulfadli@gmal.com',
        'NIM' => '09031282328037'
    ];
}

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', getuserdata());
});

Route::get('login', function () {
    return view('account/login');
});

