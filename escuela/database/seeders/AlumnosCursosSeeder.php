<?php

namespace Database\Seeders;

use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlumnosCursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //a cada alumno le asigna de 1 a 3 cursos al alazar
        foreach (Alumno::all() as $alumno) {
            $cursosAleatorios = Curso::inRandomOrder()->limit(rand(1, 3))->pluck('id');
            $alumno->cursos()->attach($cursosAleatorios);
        }
    }
}
