<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GoalCategory;


class GoalCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GoalCategory::insert([
            ['name' => 'Pendidikan'],
            ['name' => 'Liburan'],
            ['name' => 'Kesehatan'],
        ]);
    }
}    