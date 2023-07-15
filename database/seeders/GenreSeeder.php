<?php

namespace Database\Seeders;

use App\Models\Genres;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genres::create([
            'id' => 1,
            'name' => 'Drama',
            'description' => 'Drama adalah genre film yang menggambarkan kehidupan sehari-hari dengan situasi yang menyedihkan, menyentuh, dan mengharukan.',
        ]);
    }
}
