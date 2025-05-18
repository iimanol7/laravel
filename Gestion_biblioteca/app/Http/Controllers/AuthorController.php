<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){

        // $autores = Author::all();
        $autores = Author::orderBy('id', 'desc')->paginate(10);
        return view('autores', compact('autores'));
    }

    public function ver($id){

        $autor = Author::find($id);

        $libros = $autor->books;
        return view('detalles.autor', compact('autor', 'libros'));
    }

    public function nuevo(){
        return view('crear.autor');
    }

    public function crear(Request $request){

        $request->validate([
            "name" => "required|min:3|max:255",
            "pais" => "required"
        ]);

        Author::create([
            "name" => $request->name,
            "country" => $request->pais
        ]);
        return redirect('/autores');
    }

    public function modificar($id){
        $autor = Author::find($id);
        return view('modificar.autor', compact('autor'));
    }

    public function editar($id, Request $request){
        // return request()->all();
      //validamos. si no cumple devuelve con $errors o @error
        $request->validate([
            "name"=> 'required|min:3|max:255',
            "pais"=> 'required'
        ]);
      //buscamos el autor y lo modificamos
        $autor = Author::find($id);
        $autor->name = $request->name;
        $autor->country = $request->pais;
        $autor->save();
      //redireccionamos
        return redirect("/autores/{$id}");
    }

    public function eliminar($id){
        $autor = Author::find($id);
        
        return view('eliminar.autor', compact('autor'));
    }

    public function borrar($id){
      //borrar
        $autor = Author::find($id);
        $autor->delete();
        
        return redirect('/autores');
    }
}
