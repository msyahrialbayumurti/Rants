<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Resources\PesananMakeUpResource; // Resource untuk API
use App\Models\PesananMakeUp;
use Illuminate\Http\Request;

class PesananMakeUpController extends Controller
{
    //Menampilkan semua pesanan Makeup
    public function index(Request $request)
    {
        $pesananKostums = PesananMakeUp::all(); // Ambil semua pesanan kostum
        // Gunakan PesananKostumResource untuk API
        return PesananMakeUpResource::collection($pesananKostums);
    }

    /**
     * Menampilkan detail pesanan kostum berdasarkan ID.
     */
    public function show($id)
    {
        $pesananKostum = PesananMakeUp::findOrFail($id); // Cari berdasarkan ID
        return new PesananMakeUpResource($pesananKostum); // Gunakan resource yang sesuai
    }
}