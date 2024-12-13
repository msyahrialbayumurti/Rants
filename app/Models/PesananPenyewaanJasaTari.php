<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PesananPenyewaanJasaTari extends Model
{


        // Atribut yang dapat diisi melalui mass assignment
        protected $fillable = [
            'penyewaan_jasa_taris_id',
            'Users_id',
            'jumlah_penari',
            'tanggal',
            'jenis_tarian',
            'jam_pemakaian',
            'deskripsi_acara',
            'lokasi',
            'alamat',
            'latitude',
            'longitude',
            'total_harga',
            'status_pesanan',
        ];
    public function pesanan_penyewaan_jasa_tari(): BelongsTo
    {
        return $this->belongsTo (PenyewaanJasaTari::class);
    }

        /**
     * Relasi polymorphic ke model Pesanan
     */
    // public function pesanans()
    // {
    //     return $this->morphMany(Pesanan::class, 'pesananable');
    // }
}