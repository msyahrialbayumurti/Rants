<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama_produk', // Nama produk
        'deskripsi',   // Deskripsi produk
    ];
}