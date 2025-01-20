<?php


use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\User\HomeController;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::get('/kontak', [HomeController::class, 'showKontak'])->name('kontak');

Route::get('/layanan', [HomeController::class, 'showLayanan'])->name('layanan');

Route::get('/home', [HomeController::class, 'showHome'])->name('home');

Route::get('/tentang-kami', [HomeController::class, 'showAboutme'])->name('tentangkami');

Route::get('/riwayat', [HomeController::class, 'showRiwayat'])->name('riwayat');

Route::get('/profil', [HomeController::class, 'showProfil'])->name('profil');

Route::get('/notifikasi', [HomeController::class, 'showNotifikasi'])->name('notifikasi');



require __DIR__.'/auth.php';
