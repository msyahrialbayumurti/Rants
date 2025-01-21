<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\KostumController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\CalendarController;


// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/kontak', [HomeController::class, 'showKontak'])->name('kontak');

// Route::get('/layanan', [HomeController::class, 'showLayanan'])->name('layanan');

Route::get('/home', [HomeController::class, 'showHome'])->name('home');

Route::get('/tentang-kami', [HomeController::class, 'showAboutme'])->name('tentangkami');

Route::get('/riwayat', [HomeController::class, 'showRiwayat'])->name('riwayat');

Route::get('/profil', [HomeController::class, 'showProfil'])->name('profil');
Route::get('/notifikasi', [HomeController::class, 'showNotifikasi'])->name('notifikasi');


// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Route untuk halaman register
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');

// Route untuk proses register
Route::post('/post-register', [AuthController::class, 'post_register'])->name('post.register');

// Route untuk proses login
Route::post('/post-login', [AuthController::class, 'login'])->name('post.login');

Route::get('/password/reset', [AuthController::class, 'showResetPassword'])->name('password.request');

// Route::get('/kostum', [KostumController::class, 'indexx']);
// Route::get('/kostum/{id}', [KostumController::class, 'showKostum']);
// Route::get('/layanan', [HomeController::class, 'showlayanan']);

// Route untuk halaman layanan yang menampilkan semua layanan termasuk kostum
Route::get('/layanan', [HomeController::class, 'showlayanan'])->name('layanan');

Route::get('/layanan/acara/{tanggal}', [CalendarController::class, 'schedule']);

Route::get('/event-details', [CalendarController::class, 'getEventDetails']);
