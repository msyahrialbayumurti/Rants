<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GalleryController; 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostumController;
use App\Http\Controllers\MakeUpController;
use App\Http\Controllers\PenyewaanJasaTariController;
use App\Http\Controllers\PesananKostumController;
use App\Http\Controllers\PesananMakeUpController;
use App\Http\Controllers\PesananPenyewaanJasaTariController;

// login
// Route::post('/login', function (Request $request) {
//     $request->validate([
//         'email' => 'required|email',
//         'password' => 'required',
//     ]);

//     $user = User::where('email', $request->email)->first();

//     if (!$user || !Hash::check($request->password, $user->password)) {
//         return response()->json([
//             'status' => 'error',
//             'message' => 'Invalid credentials',
//         ], 401);
//     }

//     $token = $user->createToken('API Token')->plainTextToken;

//     return response()->json([
//         'status' => 'success',
//         'message' => 'Login successful',
//         'data' => [
//             'user' => $user,
//             'token' => $token,
//         ],
//     ]);
// });

Route::post('/login', [AuthController::class, 'login']);

// Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [RegisterController::class, 'register']);

// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [RegisterController::class, 'register']);

// jadwal
route::get('/acara/{tanngal}',[CalendarController::class, 'schedule' ]);

// get gallery
Route::get('galleries/',[GalleryController::class,'index']);

//Kostum
Route::prefix('kostum')->group(function () {
    Route::get('/all', [KostumController::class, 'index']); // Mendapatkan semua kostum
    Route::get('/{id}', [KostumController::class, 'show']); // Mendapatkan detail kostum
    //     Route::post('/', [KostumController::class, 'store']); // Menambahkan kostum
//     Route::put('/{id}', [KostumController::class, 'update']); // Mengupdate kostum
//     Route::delete('/{id}', [KostumController::class, 'destroy']); // Menghapus kostum
});


// MakeUp
Route::prefix('makeup')->group(function () {
    Route::get('/all', [MakeupController::class, 'index']); // Mendapatkan semua makeup
    Route::get('/{id}', [MakeupController::class, 'show']); // Mendapatkan detail makeup
    // Route::post('/', [MakeupController::class, 'store']); // Menambahkan makeup baru
    // Route::put('/{id}', [MakeupController::class, 'update']); // Mengupdate makeup
    // Route::delete('/{id}', [MakeupController::class, 'destroy']); // Menghapus makeup
});

//PenyewaanJasaTari
Route::prefix('tari')->group(function () {
    Route::get('/all', [PenyewaanJasaTariController::class, 'index']); // Mendapatkan semua data
    Route::get('/{id}', [PenyewaanJasaTariController::class, 'show']); // Mendapatkan detail data
    // Route::post('/', [PenyewaanJasaTariController::class, 'store']); // Menambahkan data baru
    // Route::put('/{id}', [PenyewaanJasaTariController::class, 'update']); // Mengupdate data
    // Route::delete('/{id}', [PenyewaanJasaTariController::class, 'destroy']); // Menghapus data
});

//PesananKostum
Route::get('pesanan-kostum', [PesananKostumController::class, 'index']);
Route::get('pesanan-kostum/{id}', [PesananKostumController::class, 'show']);

//PesananMakeUp
Route::get('pesanan-makeup', [PesananKostumController::class, 'index']);
Route::get('pesanan-makeup/{id}', [PesananKostumController::class, 'show']);

//PesananPenyewaanJasaTari
Route::get('pesanan-penyewaanjasatari', [PesananPenyewaanJasaTariController::class, 'index']);
Route::get('pesanan-penyewaanjasatari/{id}', [PesananPenyewaanJasaTariController::class, 'show']);
