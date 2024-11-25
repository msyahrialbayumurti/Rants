<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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