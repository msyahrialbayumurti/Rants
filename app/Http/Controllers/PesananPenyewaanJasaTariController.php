<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PesananPenyewaanJasaTariResource; // Resource untuk API
use App\Models\PesananPenyewaanJasaTari; // Model untuk query database
use Illuminate\Http\Request;

class PesananPenyewaanJasaTariController extends Controller
{
    /**
     * Menampilkan semua pesanan penyewaan jasa tari.
     */
    public function index(Request $request)
    {
        // Mengambil data dari model
        $pesananPenyewaanJasaTari = PesananPenyewaanJasaTari::all(); 

        // Memformat data menggunakan resource
        return PesananPenyewaanJasaTariResource::collection($pesananPenyewaanJasaTari);
    }

    /**
     * Menampilkan detail pesanan penyewaan jasa tari berdasarkan ID.
     */
    public function show($id)
    {
        // Mencari data berdasarkan ID
        $pesananPenyewaanJasaTari = PesananPenyewaanJasaTari::findOrFail($id);

        // Memformat data menggunakan resource
        return new PesananPenyewaanJasaTariResource($pesananPenyewaanJasaTari);
    }
}