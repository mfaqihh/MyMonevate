<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GoalCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', // Nama dari kategori goal
    ];

    /**
     * Mendefinisikan relasi "has many" dengan model Goal.
     * Ini menunjukkan bahwa setiap GoalCategory dapat memiliki banyak Goals.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function goals(): HasMany
    {
        // hasMany(RelatedModel, foreignKey, localKey)
        return $this->hasMany(Goal::class, 'goal_category_id', 'id');
        // - Goal::class: Model yang berelasi (Goal)
        // - 'goal_category_id': Kolom foreign key di tabel 'goals' yang mengacu pada ID kategori
        // - 'id': Kolom primary key di tabel 'goal_categories' (default)
    }
}