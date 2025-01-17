<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\HomeController;


// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('index');

// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/post-login', [AuthController::class, 'loginWeb'])->name('post-login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
// Route untuk halaman register &  proses register  
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');
Route::post('/postregister', [RegisterController::class, 'postRegister'])->name('post_register');

Route::get('/kontak', [HomeController::class, 'showKontak'])->name('kontak');

Route::get('/layanan', [HomeController::class, 'showLayanan'])->name('layanan');

Route::get('/home', [HomeController::class, 'showHome'])->name('home');

Route::get('/tentang-kami', [HomeController::class, 'showAboutme'])->name('tentangkami');

Route::get('/beranda', [HomeController::class, 'beranda'])->name('beranda');