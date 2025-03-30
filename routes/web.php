<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/profile/{id}', [UserController::class, 'ById'])->name('profile');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admindashboard');
Route::get('/admin/delete', [AdminController::class, 'index'])->name('admindashboard');

Route::get('login', function () {
    return view('account/login');
});
