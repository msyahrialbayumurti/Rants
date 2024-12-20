<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Menampilkan profil user yang sedang login.
     */
    public function showProfile()
    {
        try {
            $user = Auth::user();

            return response()->json([
                'status' => 'success',
                'message' => 'Data profil berhasil diambil.',
                'data' => new UserResource($user),
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal mengambil data profil.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Update profil user yang sedang login.
     */
    public function updateProfile(Request $request)
    {
        try {
            $user = Auth::user();

            // Validasi input
            $validated = $request->validate([
                'name' => 'sometimes|string|max:255',
                'nohp' => 'sometimes|string|max:15',
                'email' => 'sometimes|email|unique:users,email,' . $user->id,
                // 'password' => 'sometimes|nullable|string|min:6|confirmed',
                // 'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            // Update data profil
            if (isset($validated['name'])) {
                $user->name = $validated['name'];
            }
            if (isset($validated['nohp'])) {
                $user->nohp = $validated['nohp'];
            }
            if (isset($validated['email'])) {
                $user->email = $validated['email'];
            }
            if (isset($validated['password'])) {
                $user->password = Hash::make($validated['password']);
            }

            // Jika ada file gambar yang diunggah
            if ($request->hasFile('image')) {
                if ($user->image && $user->image !== 'default.png' && Storage::exists('public/images/' . $user->image)) {
                    Storage::delete('public/images/' . $user->image);
                }

                $imageName = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->file('image')->storeAs('public/images', $imageName);
                $user->image = $imageName;
            }

            // $user->save();

            return response()->json([
                'status' => 'success',
                'message' => 'Profil berhasil diperbarui.',
                'data' => new UserResource($user),
            ], 200);
        } catch (ValidationException $e) {
            // Error validasi
            return response()->json([
                'status' => 'error',
                'message' => 'Validasi gagal.',
                'errors' => $e->errors(),
            ], 422);
        } catch (\Exception $e) {
            // Error umum
            return response()->json([
                'status' => 'error',
                'message' => 'Gagal memperbarui profil.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
}

