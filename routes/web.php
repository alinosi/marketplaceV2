<?php

use Illuminate\Support\Facades\Route;

function getuserdata() {
    return $data = [
        'name' => 'M Thoriqul Fadli',
        'email' => 'mthoriqulfadli@gmal.com',
        'NIM' => '09031282328037',
        'img' => 'saber.jpg'
    ];
}

Route::get('/', function () {
    return view('home', getuserdata());
})->name('home');

Route::get('/about', function () {
    return view('about', getuserdata());
})->name('about');

Route::get('login', function () {
    return view('account/login');
});

