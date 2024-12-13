<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PesananKostumResource extends JsonResource
{
    protected static ?string $model = PesananKostumResource::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // /**
    //  * Transform the resource into an array.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return array
    //  *
    //  *
    //  */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'kosta_id' => $this->kosta_id,
            'kosta' => new KostaResource($this->whenLoaded('kosta')),  // Mengambil resource Kosta jika relasi dimuat
            'user_id' => $this->Users_id,
            'user' => new UserResource($this->whenLoaded('user')),  // Mengambil resource User jika relasi dimuat
            'nama_kostum' => $this->nama_kostum,
            'image' => $this->image,
            'ukuran' => $this->ukuran,
            'jumlah' => $this->jumlah,
            'waktu_pemakaian_mulai' => $this->waktu_pemakaian_mulai->toIso8601String(),
            'waktu_pemakaian_selesai' => $this->waktu_pemakaian_selesai->toIso8601String(),
            'harga' => $this->harga,
            'status_pesanan' => $this->status_pesanan,
            'created_at' => $this->created_at->toIso8601String(),
            'updated_at' => $this->updated_at->toIso8601String(),
        ];
    }
}