<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{

    public function showRegister()
    {
        return view('pages.register'); // Pastikan file ada di resources/views/auth/login.blade.php
    }

    /**
     * Menangani proses registrasi pengguna baru.
     */
    public function register(Request $request)
    {
        try {
            // Validasi input dari form
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',            // Nama wajib diisi
                'email' => 'required|string|email|max:255|unique:users',  // Email wajib dan unik
                'nohp' => 'required|string|max:15',              // Nomor HP wajib diisi
                'password' => 'required|string|min:6|confirmed',  // Password wajib, minimal 6 karakter, dan konfirmasi
            ]);

            // Membuat user baru
            // $user = User::create([
            //     'name' => $validatedData['name'],
            //     'email' => $validatedData['email'],
            //     'nohp' => $validatedData['nohp'],
            //     'password' => Hash::make($validatedData['password']),  // Enkripsi password
            // ]);

            $user = User::create([
                'name' => $validatedData['name'],
                'email' => strtolower(trim($validatedData['email'])), // Normalisasi email
                'nohp' => $validatedData['nohp'],
                'password' => Hash::make($validatedData['password']), // Hash password
            ]);

            // Buat token Sanctum
            $token = $user->createToken('API Token')->plainTextToken;

            // Response JSON jika registrasi berhasil
            return response()->json([
                'status' => 'success',
                'message' => 'Registrasi berhasil',
                'data' => [
                    'user' => $user,
                    'token' => $token,
                ],
            ], 201); // 201 Created

        } catch (ValidationException $e) {
            // Respons jika validasi gagal
            return response()->json([
                'status' => 'error',
                'message' => 'Validasi gagal',
                'errors' => $e->errors(), // Menampilkan detail error dari validasi
            ], 422); // 422 Unprocessable Entity

        } catch (\Exception $e) {
            // Respons jika terjadi error server
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan pada server',
                'error' => $e->getMessage(), // Pesan error untuk debugging
            ], 500); // 500 Internal Server Error
        }
    }
}