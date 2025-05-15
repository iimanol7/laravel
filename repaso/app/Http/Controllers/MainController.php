<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    ////////// devolver vistas sin parametro s////////////////////////////////
    public function productos(){

        return view('productos.productos'); //carpeta.nombreVista
    }

    public function categorias(){

        return view('categorias.categorias');
    }

    ////////// devolver vistas con parametros ////////////////////////////////
    public function producto($idProducto){

        return view('productos.producto', compact('idProducto')); //crea un array de indice y valor con el mismo nombre
        // compact('idProducto'); == ['idProducto' => $idProducto]
    }

    public function categoria($idCategoria){
        return view('categorias.categoria', ['categoria' => $idCategoria]);  // [nombreVariable => valor]
    }
}
