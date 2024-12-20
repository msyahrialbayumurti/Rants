<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\HomeController;


// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
})->name('index');


Route::get('/home', [HomeController::class, 'showHome'])->name('home');

// Route untuk halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Route untuk halaman register
Route::get('/register', [RegisterController::class, 'showRegister'])->name('register');

// Route untuk proses register
Route::post('/post-register', [AuthController::class, 'post_register'])->name('post.register');

// Route untuk proses login
Route::post('/post-login', [AuthController::class, 'login'])->name('post.login');
