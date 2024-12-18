<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;
use Exception;

class PaymentController extends Controller
{
    public function createTransaction(Request $request)
    {
        // Konfigurasi Midtrans
        Config::$serverKey = config('services.midtrans.server_key');
        Config::$clientKey = config('services.midtrans.client_key');
        Config::$isProduction = config('services.midtrans.is_production');
        Config::$isSanitized = true;
        Config::$is3ds = true;

        // Validasi input
        $request->validate([
            'amount' => 'required|numeric',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Detail transaksi
        $orderId = 'order-' . uniqid();
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $request->input('amount'),
            ],
            'customer_details' => [
                'first_name' => $request->input('name'),
                'email' => $request->input('email'),
            ],
        ];

        try {
            // Generate Snap Token
            $snapToken = Snap::getSnapToken($params);

            // Kembalikan Snap Token sebagai respons
            return response()->json([
                'status' => 'success',
                'snap_token' => $snapToken,
                'order_id' => $orderId
            ]);
        } catch (Exception $e) {
            // Menangani kesalahan API Midtrans
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menghubungi Midtrans: ' . $e->getMessage(),
            ], 500);
        }
    }
}