<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Opinion>
 */
class OpinionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'book_id' => rand(1,20),
        'username'=>fake()->word(),
        'rating' =>rand(1,5),
        'comment'=>fake()->text(50),
        ];
    }
}
