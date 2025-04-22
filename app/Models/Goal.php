<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Goal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'goal_category_id', // Foreign key untuk menghubungkan ke tabel goal_categories
        'name',             // Nama dari goal
        'budget',           // Budget yang dibutuhkan untuk goal
        'target_date',      // Tanggal target untuk mencapai goal
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'target_date' => 'date', // Mengubah format penyimpanan tanggal menjadi objek Carbon
    ];

    /**
     * Mendefinisikan relasi "belongs to" dengan model GoalCategory.
     * Ini menunjukkan bahwa setiap Goal termasuk ke dalam satu GoalCategory.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(GoalCategory::class, 'goal_category_id', 'id');
    }
}   