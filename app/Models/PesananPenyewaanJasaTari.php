<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PesananPenyewaanJasaTari extends Model
{
    public function pesanan_penyewaan_jasa_tari(): BelongsTo
    {
        return $this->belongsTo (PenyewaanJasaTari::class);
    }

        /**
     * Relasi polymorphic ke model Pesanan
     */
    public function pesanans()
    {
        return $this->morphMany(Pesanan::class, 'pesananable');
    }
}