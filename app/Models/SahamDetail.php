<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SahamDetail extends Model
{
    use HasFactory;

    protected $fillable = ['asset_id', 'price_per_sheet', 'lot_count', 'total_price'];

    // Define the inverse relationship with asset
    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }
}

