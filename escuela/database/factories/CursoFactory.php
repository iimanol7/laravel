<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'nivel' => fake()->randomElement(['facil', 'intermedio', 'dificil']),
            'horas' => fake()->numberBetween(100, 999),
            'profesor_id' => rand(1,5),
        ];
    }
}
