<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'country-side cafes'
            ],
            [
                'name' => 'vegan cafes'
            ],
        ];

        foreach ($categories as $categotyData) {
            Category::create($categotyData);
        }
    }
}
