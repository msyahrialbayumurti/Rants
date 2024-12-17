<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KostumController;
use App\Http\Controllers\MakeUpController;
use App\Http\Controllers\PenyewaanJasaTariController;
use App\Http\Controllers\PesananKostumController;
use App\Http\Controllers\PesananMakeUpController;
use App\Http\Controllers\PesananPenyewaanJasaTariController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

// 1. Login & Register
Route::post('/login', [AuthController::class, 'login']);
Route::get('/login', function () {
    return response()->json(['status' => 'error', 'message' => 'Unauthorized. Silakan login untuk melanjutkan.'], 401);
})->name('login');
Route::post('/register', [RegisterController::class, 'register']);

// 2. Jadwal Acara
Route::get('/acara/{tanggal}', [CalendarController::class, 'schedule']);

// 3. Gallery
Route::get('/galleries', [GalleryController::class, 'index']);

// 4. Kostum
Route::prefix('kostum')->group(function () {
    Route::get('/all', [KostumController::class, 'index']);
    // Tambahkan endpoint tambahan jika diperlukan
});

// 5. MakeUp
Route::prefix('makeup')->group(function () {
    Route::get('/all', [MakeUpController::class, 'index']);
    // Tambahkan endpoint tambahan jika diperlukan
});

// 6. Penyewaan Jasa Tari
Route::prefix('penyewaan-jasa-tari')->group(function () {
    Route::get('/all', [PenyewaanJasaTariController::class, 'index']);
    // Tambahkan endpoint tambahan jika diperlukan
});

// 7. Pesanan Kostum
Route::prefix('pesanan-kostum')->group(function () {
    Route::get('/', [PesananKostumController::class, 'index']);
    Route::get('/{id}', [PesananKostumController::class, 'show']);
});

// 8. Pesanan MakeUp
Route::prefix('pesanan-makeup')->group(function () {
    Route::get('/', [PesananMakeUpController::class, 'index']);
    Route::get('/{id}', [PesananMakeUpController::class, 'show']);
});

// 9. Pesanan Penyewaan Jasa Tari
Route::prefix('pesanan-penyewaanjasatari')->group(function () {
    Route::get('/', [PesananPenyewaanJasaTariController::class, 'index']);
    Route::get('/{id}', [PesananPenyewaanJasaTariController::class, 'show']);
});

// 10. Update Profil User (Protected by Sanctum Middleware)
Route::middleware('auth:sanctum')->get('/profile', [UserController::class, 'showProfile']);


Route::middleware('auth:sanctum')->post('/profile-u', [UserController::class, 'updateProfile']);




//Payment
Route::post('/payment/pesananmakeup', [PaymentController::class, 'pesananMakeup']);