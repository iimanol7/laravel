<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title' =>fake()->sentence(),
        'description' =>fake()->text(50),
        'published_year' =>fake()->year(2000, 2025),
        'author_id' => rand(1,20),
        ];
    }
}
