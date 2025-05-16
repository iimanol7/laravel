<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //especificamos que quieremos que vaya en cada campo
        return [
            'nombre' => fake()->title(), 
            'desc' => fake()->sentence(),
            'categoria' => fake()->word()
        ];
        //lo llamamos desde el seeder
    }
}
