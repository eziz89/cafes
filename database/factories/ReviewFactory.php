<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cafe_id' => Cafe::factory(),
            'customer_name' => $this->faker->name,
            'rating' => $this->faker->rating,
            'comment' => $this->faker->text,
        ];
    }
}
