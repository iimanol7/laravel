<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Rutas con valores estáticos
Route::get('/productos', [MainController::class, 'productos']);  // [controlador:class, 'NombreFuncion']

Route::get('/categorias', [MainController::class, 'categorias']); 

//Rutas con valores dinámicos 
Route::get('/productos/{idProducto}', [MainController::class, 'producto']); 
Route::get('/categorias/{idCategoria}', [MainController::class, 'categoria']); 
