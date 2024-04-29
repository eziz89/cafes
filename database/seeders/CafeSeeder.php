<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cafes = [
            [
                'name' => 'Best cafe in the world!',
                'description' => 'You must come here and taste this meals!',
            ],
            [
                'name' => 'Full taste',
                'description' => "Don't think, just come!",
            ],
        ];

        foreach ($cafes as $cafeData) {
            Cafe::create($cafeData);
        }
    }
}
