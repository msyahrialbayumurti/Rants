<?php

use App\Http\Controllers\CalendarController;
use App\Http\Controllers\GalleryController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KostumController;


// login
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid credentials',
        ], 401);
    }

    $token = $user->createToken('API Token')->plainTextToken;

    return response()->json([
        'status' => 'success',
        'message' => 'Login successful',
        'data' => [
            'user' => $user,
            'token' => $token,
        ],
    ]);
});

// jadwal
route::get('/acara/{tanngal}',[CalendarController::class, 'schedule' ]);

// get gallery
Route::get('galleries/',[GalleryController::class,'index']);

//Kostum
Route::prefix('kostum')->group(function () {
    Route::get('/all', [KostumController::class, 'index']); // Mendapatkan semua kostum
//     Route::post('/', [KostumController::class, 'store']); // Menambahkan kostum
//     Route::get('/{id}', [KostumController::class, 'show']); // Mendapatkan detail kostum
//     Route::put('/{id}', [KostumController::class, 'update']); // Mengupdate kostum
//     Route::delete('/{id}', [KostumController::class, 'destroy']); // Menghapus kostum
});