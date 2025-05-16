<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //importamos es modelo y creamos un registro o varios
        Producto::create([
            'nombre' => 'ProductoSeeder',
            'desc' => 'descipcion',
            'categoria' => 'categoria'
        ]);

        //creamos 10 registros con FACTORY
        Producto::factory(10)->create();
    }
}
