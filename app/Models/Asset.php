<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category'];

    // Define the relationship with saham_details and crypto_details
    public function sahamDetail()
    {
        return $this->hasOne(SahamDetail::class);
    }

    public function cryptoDetail()
    {
        return $this->hasOne(CryptoDetail::class);
    }
}

