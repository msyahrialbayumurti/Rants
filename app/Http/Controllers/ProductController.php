<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Mengambil produk berdasarkan layanan.
     *
     * @param string $layanan
     * @return \Illuminate\Http\JsonResponse
     */
    public function getProduk($layanan)
    {
        // Validasi parameter layanan
        $validServices = ['kostum', 'makeup', 'jasa-tari'];

        if (!in_array($layanan, $validServices)) {
            return response()->json(['message' => 'Layanan tidak valid.'], 400);
        }

        // Query berdasarkan layanan
        if ($layanan === 'kostum') {
            $produk = DB::table('kostum')
                ->select('nama_kostum as name', 'image', 'jumlah', 'warna', 'ukuran', 'harga')
                ->get();
        } elseif ($layanan === 'makeup') {
            $produk = DB::table('make_ups')
                ->select('Kategori as name', 'image', 'harga')
                ->get();
        } elseif ($layanan === 'jasa-tari') {
            $produk = DB::table('penyewaan_jasa_taris')
                ->select('jenis_tarian as name', 'image', 'jumlah_penari', 'harga')
                ->get();
        }

        // Cek apakah produk kosong
        if ($produk->isEmpty()) {
            return response()->json(['message' => 'Tidak ada produk yang tersedia.'], 200);
        }

        return response()->json($produk, 200);
    }
}