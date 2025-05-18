<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\OpinionController;
use App\Models\Book;
use App\Models\Opinion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/autores', [AuthorController::class, 'index']);
Route::get('/autores/nuevo', [AuthorController::class, 'nuevo']);
Route::post('/autores/crear', [AuthorController::class, 'crear']);
Route::get('/autores/{id}', [AuthorController::class, 'ver']);
Route::get('/autores/modificar/{id}', [AuthorController::class, 'modificar']);
Route::get('/autores/eliminar/{id}', [AuthorController::class, 'eliminar']);
//editar
Route::put('/autores/{id}', [AuthorController::class, 'editar']);
//eliminar
Route::delete('/autores/{id}', [AuthorController::class, 'borrar']);



Route::get('/libros', [BookController::class, 'index']);
Route::get('/libros/nuevo', [BookController::class, 'nuevo']);
Route::post('/libros/crear', [BookController::class, 'crear']);
Route::get('/libros/{id}', [BookController::class, 'ver']);
Route::get('/libros/{id}/modificar', [BookController::class, 'editar']);
Route::get('/libros/{id}/eliminar', [BookController::class, 'borrar']);
//editar
Route::put('/libros/{id}', [BookController::class, 'modificar']);
//eliminar
Route::delete('/libros/{id}', [BookController::class, 'eliminar']);


Route::get('/opiniones', [OpinionController::class, 'index']);
Route::get('/opiniones/nuevo', [OpinionController::class, 'nuevo']);
Route::post('/opiniones/crear', [OpinionController::class, 'crear']);

