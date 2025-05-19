<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
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
            'edad' => fake()->numberBetween(18, 32),
            'telefono' => fake()->phoneNumber(),
            'direccion' => fake()->streetAddress(),
            'foto' => fake()->imageUrl(640, 480),
        ];
    }
}
