<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MakeUp extends Model
{
    protected $fillable = [
        'image',
        'harga',
        // Kolom lainnya...
    ];
}