<?php

use App\Models\Profile;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

// function getuserdata() {
//     return $data = [
//         'name' => 'M Thoriqul Fadli',
//         'email' => 'mthoriqulfadli@gmal.com',
//         'NIM' => '09031282328037',
//         'img' => 'saber.jpg',
//         'judul' => 'hallo'
//     ];
// }

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::get('/logout', [AuthController::class, 'destroy'])->name('logout');
Route::get('/login/.....', [AuthController::class, 'authValidate'])->name('authentication');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::get('/profile', [UserController::class, 'nonAuthenticatedUser'])->name('detail');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admindashboard');
Route::get('/admin/delete', [AdminController::class, 'index'])->name('adminDelete');
Route::get('/profile/{id}', [AdminController::class, 'byId'])->name('profile');


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


// Route::get('login', function () {
//     return view('account/login');
// });
