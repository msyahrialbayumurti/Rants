<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PesananPenyewaanJasaTariResource extends JsonResource
{

    // protected static ?string $model = Pesanan::class; // Menggunakan model Pesanan

protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';
protected static ?string $navigationGroup = 'Manajemen Pesanan';
    /**
     * Mengubah resource menjadi array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'penyewaan_jasa_taris_id' => $this->penyewaan_jasa_taris_id,
            'user_id' => $this->Users_id,
            'jumlah_penari' => $this->jumlah_penari,
            'tanggal' => $this->tanggal,
            'jenis_tarian' => $this->jenis_tarian,
            'jam_pemakaian' => $this->jam_pemakaian,
            'deskripsi_acara' => $this->deskripsi_acara,
            'lokasi' => $this->lokasi,
            'alamat' => $this->alamat,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'total_harga' => $this->total_harga,
            'status_pesanan' => $this->status_pesanan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'penyewaan_jasa_taris' => new PenyewaanJasaTarisResource($this->whenLoaded('penyewaanJasaTaris')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}