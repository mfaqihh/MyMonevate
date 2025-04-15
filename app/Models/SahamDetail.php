<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SahamDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_asset',
        'jumlah_lot',
        'harga_per_lot',
        'nilai_total'
    ];

    public function asset()
    {
        return $this->belongsTo(Asset::class, 'id_asset');
    }
}

