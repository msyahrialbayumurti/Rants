<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PesananKostumResource; // Resource untuk API
use App\Models\PesananKostum;
use Illuminate\Http\Request;

class PesananKostumController extends Controller
{

    public function createOrder(Request $request)
    {
        $validatedData = $request->validate([
            'kostums_id' => 'required|exists:kostums,id',
            'Users_id' => 'required|exists:users,id',
            'waktu_pemakaian_mulai' => 'required|date|date_format:Y-m-d H:i:s',
            'waktu_pemakaian_selesai' => 'required|date|date_format:Y-m-d H:i:s',
            'total_harga' => 'required|numeric',
            'status_pesanan' => 'required|string',
        ]);

    
        
        // Sesuaikan dengan nama field yang ada di model Anda
        $PesananKostum = PesananKostum::create([
            'kostums_id' => $validatedData['kostums_id'],  // Sesuaikan dengan 'kostums_id'
            'Users_id' => $validatedData['Users_id'], // Sesuaikan dengan 'Users_id'
            'waktu_pemakaian_mulai' => $validatedData['tanggal_pesanan'], // Menggunakan 'waktu_pemakaian_mulai' di model
            'waktu_pemakaian_selesai' => $validatedData['tanggal_pesanan'], // Anda bisa menyesuaikan jika ada waktu selesai atau lainnya
            'total_harga' => $validatedData['total_harga'],
            'status_pesanan' => $validatedData['status_pesanan'],
        ]);
        
        

        return response()->json([
            'message' => 'Pesanan berhasil dibuat',
            'order' => $PesananKostum,
        ], 201);
    }

    /**
     * Menampilkan semua pesanan kostum.
     */
    public function index(Request $request)
    {
        $pesananKostums = PesananKostum::all(); // Ambil semua pesanan kostum
        // Gunakan PesananKostumResource untuk API
        return PesananKostumResource::collection($pesananKostums);
    }

    /**
     * Menampilkan detail pesanan kostum berdasarkan ID.
     */
    public function show($id)
    {
        $pesananKostum = PesananKostum::findOrFail($id); // Cari berdasarkan ID
        return new PesananKostumResource($pesananKostum); // Gunakan resource yang sesuai
    }
}