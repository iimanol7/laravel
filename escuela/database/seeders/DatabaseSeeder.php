<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Profesor;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Profesor::factory(5)->create();
        Alumno::factory(20)->create();
        Curso::factory(10)->create();


        $this->call([
            AlumnosCursosSeeder::class,
        ]);
        // User::factory(10)->create();


    }
}
