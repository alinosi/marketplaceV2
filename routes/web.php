<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;

// function getuserdata() {
//     return $data = [
//         'name' => 'M Thoriqul Fadli',
//         'email' => 'mthoriqulfadli@gmal.com',
//         'NIM' => '09031282328037',
//         'img' => 'saber.jpg',
//         'judul' => 'hallo'
//     ];
// }

Route::get('/', function () {
    return view('web/home/home', [
        "tittle" => "home",
        "assets" => "home"
    ]);
})->name('home');

Route::get('/about', function () {
    return view('about', [
        "tittle" => "about",
        "assets" => "about"
    ]);
})->name('about');

Route::get('/market', function () {
    return view('market', [
        "tittle" => "market",
        "assets" => "market"
    ]);
})->name('market');

Route::get('/sell', function () {
    return view('sell', [
        "tittle" => "sell",
        "assets" => "sell"
    ]);
})->name('sell');;

Route::get('/profile/{id}', function ($id) {
    return view('web/profiles/profile', Profile::getuser($id), [
        "tittle" => "profile"
    ]);
})->name('profile');

Route::get('login', function () {
    return view('account/login');
});

