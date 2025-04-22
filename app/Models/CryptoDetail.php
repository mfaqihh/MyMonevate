<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CryptoDetail extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'crypto_value', 'current_price'];

    // Define the inverse relationship with asset
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}

