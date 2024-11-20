<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;  // Pastikan ini ada

class RegisterController extends Controller
{
    /**
     * Menangani proses registrasi pengguna baru.
     */
    public function register(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'name' => 'required|string|max:255',            // Nama wajib diisi
            'email' => 'required|string|email|max:255|unique:users',  // Email wajib dan unik
            'nohp' => 'required|string|max:15',              // Nomor HP wajib diisi
            'password' => 'required|string|min:8|confirmed',  // Password wajib, minimal 8 karakter dan konfirmasi password
        ]);

        // Membuat user baru
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nohp' => $request->nohp,
            'password' => Hash::make($request->password),  // Menggunakan Hash untuk mengenkripsi password
        ]);

        // Melakukan login otomatis setelah registrasi (optional)
        Auth::login($user); // Menggunakan Auth::login

        // Redirect ke halaman setelah registrasi sukses (misalnya ke halaman dashboard)
        return redirect()->route('dashboard');
    }
}