<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

// Endpoint untuk login
Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Invalid credentials'], 401);
    }

    $token = $user->createToken('API Token')->plainTextToken;

    return response()->json([
        'message' => 'Login successful',
        'token' => $token,
    ]);
});

// Endpoint terproteksi
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});