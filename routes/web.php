<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'name' => 'M Thoriqul Fadli',
        'email' => 'mthoriqulfadli@gmal.com',
        'NIM' => '09031282328037'
    ] );
});


Route::get('login', function () {
    return view('account/login');
});