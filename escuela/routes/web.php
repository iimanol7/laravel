<?php

use App\Http\Controllers\AlumnosController;
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
//crear
Route::post('/alumnos/crear', [AlumnosController::class, 'crear']);
//modificar
Route::put('/alumnos/{id}', [AlumnosController::class, 'modificar']);
//eliminar
Route::delete('/alumnos/{id}', [AlumnosController::class, 'eliminar']);

Route::get('/profesores', [ProfesoresController::class, 'index']);
Route::get('/profesores/nuevo', [ProfesoresController::class, 'nuevo']);
//crear
Route::post('/profesores/crear', [ProfesoresController::class, 'crear']);
