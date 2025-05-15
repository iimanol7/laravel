<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class MainController extends Controller
{
    ////////// devolver vistas sin parametros ////////////////////////////////
    public function productos(){

     //crear un registro
        // $producto = new Producto;
        // $producto->nombre = 'producto2';
        // $producto->desc = 'Descripcion2';
        // $producto->categoria = 'categoria2';
        // $producto->save();

        // Producto::create([
        //     "nombre" => "producto1",
        //     "desc" => "descripcion",
        //     "categoria" => "categoria"
        // ]);

     //buscar todos los registros
        // $productos = Producto::all();

     //buscar registro por id
        // $productos = Producto::find(3);
    
     //buscar por un campo
        // $productos = Producto::where('desc', 'descripcion')->first();
        // $productos = Producto::where('desc', 'descripcion')->get();
        // $productos = Producto::where('desc', 'like', '%descripcio_')->get();
        // $productos = Producto::orderBy('created_at', 'asc')->limit(2)->get();
        // ...

        //return $productos;
        // return view('productos.productos'); //carpeta.nombreVista
    }

    public function categorias(){

        return view('categorias.categorias');
    }

    
    //////////////////////////////////////////////////////////////////////////////////
    ////////////////// devolver vistas con parametros ////////////////////////////////
    //////////////////////////////////////////////////////////////////////////////////
    public function producto($idProducto){

        return view('productos.producto', compact('idProducto')); //crea un array de indice y valor con el mismo nombre
        // compact('idProducto'); == ['idProducto' => $idProducto]
    }

    public function categoria($idCategoria){
        return view('categorias.categoria', ['categoria' => $idCategoria]);  // [nombreVariable => valor]
    }
}
