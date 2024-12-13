<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PesananMakeUpResource extends JsonResource
{
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
            'make_ups_id' => $this->make_ups_id,
            'user_id' => $this->Users_id,
            'tanggal_pesanan' => $this->tanggal_pesanan,
            'lokasi_pemesanan' => $this->lokasi_pemesanan,
            'alamat' => $this->alamat,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'image' => $this->image,
            'total_harga' => $this->total_harga,
            'status_pesanan' => $this->status_pesanan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'make_up' => new MakeUpResource($this->whenLoaded('makeUp')),
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}