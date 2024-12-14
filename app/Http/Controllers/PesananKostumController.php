<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PesananKostumResource; // Resource untuk API
use App\Models\PesananKostum;
use Illuminate\Http\Request;

class PesananKostumController extends Controller
{
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