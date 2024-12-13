<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class KelolaProduk extends Model
{
    use HasFactory;

    // Menentukan tabel yang digunakan
    protected $table = 'make_ups'; // Sesuaikan nama tabel di database jika berbeda

    // Kolom yang bisa diisi
    protected $fillable = [
        'image',
        'harga', // Misalnya: 'kostum', 'makeup', 'jasa_tarian'
    ];

    // Relasi dengan MakeUp
    public function pesananMakeUps(): HasMany
    {
        return $this->hasMany(MakeUp::class, 'produk_id');
    }

    // Relasi dengan Kostum
    public function pesananKostums(): HasMany
    {
        return $this->hasMany(Kostum::class, 'produk_id');
    }

    // Relasi dengan Penyewaan Jasa Tari
    public function pesananTarian(): HasMany
    {
        return $this->hasMany(PenyewaanJasaTari::class, 'produk_id');
    }

    public function produk()
{
    return $this->belongsTo(Produk::class);
}


}