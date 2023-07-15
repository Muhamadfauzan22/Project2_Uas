<?php

namespace Database\Seeders;

use App\Models\Countries;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Countries::create([
            'name' => 'Korea Selatan',
        ]);
    }
}
