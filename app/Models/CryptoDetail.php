<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CryptoDetail extends Model
{
    protected $fillable = [
        'id_asset',
        'jumlah_koin',
        'harga_per_koin',
        'nilai_total'
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'id_asset');
    }
}

