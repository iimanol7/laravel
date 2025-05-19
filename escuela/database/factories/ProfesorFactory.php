<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
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
        'profesion'=> fake()->randomElement(['programacion', 'base de datos', 'sistemas', 'montaje']),
        'grado' => rand(1,6),
        'telefono' => fake()->phoneNumber()
        ];
    }
}
