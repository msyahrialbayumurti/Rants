<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PesananKostum extends Model
{
// In PesananProduk model

public function kosta()
{
    return $this->belongsTo(PesananKostum::class, 'kosta_id'); // Ensure kosta_id is the foreign key
}

public function user()
{
    return $this->belongsTo(User::class, 'Users_id'); // Ensure Users_id is the foreign key
}

}