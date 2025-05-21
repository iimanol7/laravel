<?php

use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alumnos', [AlumnosController::class, 'index']);
Route::get('/alumnos/nuevo', [AlumnosController::class, 'nuevo']);
Route::get('/alumnos/filtro', [AlumnosController::class, 'filtrar']);
Route::get('/alumnos/{id}/editar', [AlumnosController::class, 'editar']);
Route::get('/alumnos/{id}/borrar', [AlumnosController::class, 'borrar']);
Route::get('/alumnos/{id}/cursos', [AlumnosController::class, 'cursos']);
Route::get('/alumnos/{id}/matricula', [AlumnosController::class, 'matricula']);

//attach
Route::post('/alumnos/{id}/matricular', [AlumnosController::class, 'matricular']);
//detach
Route::delete('/alumnos/{idAlumno}/{idCurso}', [AlumnosController::class, 'desmatricular']);

//crear
Route::post('/alumnos/crear', [AlumnosController::class, 'crear']);
//modificar
Route::put('/alumnos/{id}', [AlumnosController::class, 'modificar']);
//eliminar
Route::delete('/alumnos/{id}', [AlumnosController::class, 'eliminar']);


Route::get('/cursos', [CursosController::class, 'index']);
Route::get('/cursos/nuevo', [CursosController::class, 'nuevo']);
Route::post('/cursos/crear', [CursosController::class, 'crear']);
Route::get('/cursos/{id}/editar', [CursosController::class, 'editar']);
Route::get('/cursos/{id}/alumnos', [CursosController::class, 'alumnos']);


Route::put('/cursos/{id}', [CursosController::class, 'modificar']);
Route::delete('/cursos/{id}', [CursosController::class, 'crear']);


Route::get('/profesores', [ProfesoresController::class, 'index']);
Route::get('/profesores/nuevo', [ProfesoresController::class, 'nuevo']);
//crear
Route::post('/profesores/crear', [ProfesoresController::class, 'crear']);
