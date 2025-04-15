<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'kategori',
        'nama_asset',
        'kode_asset',
        'tanggal_beli'
    ];

    // Relasi ke user (jika kamu pakai Jetstream Auth)
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function saham()
    {
        return $this->hasOne(SahamDetail::class, 'id_asset');
    }

    public function crypto()
    {
        return $this->hasOne(CryptoDetail::class, 'id_asset');
    }

}
