<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KostaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'nama_kosta' => $this->nama_kosta,
            // Tambahkan field lainnya sesuai dengan kebutuhan
        ];
    }
}