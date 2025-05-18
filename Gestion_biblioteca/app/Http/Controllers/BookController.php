<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index(){
        $libros = Book::OrderBy('id', 'desc')->paginate(10);
        return view('libros', compact('libros'));

    }

    public function ver($id){
        $libro = Book::find($id);
        $autor = $libro->author;

        return view('detalles.libro', compact('libro', 'autor'));

    }

    public function editar($id){
        
        $libro = Book::find($id);
        $autor = $libro->author;
        $autores = Author::where('id', '!=', $autor->id )->get();

        return view('modificar.libro', compact('libro', 'autor', 'autores'));

    }

    public function modificar($id, Request $request){

        $request->validate([
            "title" => "required|min:3|max:50",
            "description"=> "required|min:3|max:255",
            "published_year"=> ["required", "integer"],
            "author"=> "required|integer"
        ]);

        $libro = Book::find($id);
        $libro->title = $request->title;
        $libro->description = $request->description;
        $libro->published_year = $request->published_year;
        $libro->author_id = $request->author;

        $libro->save();

        return  redirect("/libros/{$id}");    

    }

    public function borrar($id){
        $libro = Book::find($id);
        return view('eliminar.libro', compact('libro'));
    }

    public function eliminar($id, Request $request){
        $libro = Book::find($id);
        $libro->delete();

        return redirect('/libros');
    }

    public function nuevo(){
        $autores = Author::all();
        return view('crear.libro', compact('autores'));
    }

    public function crear(Request $request){
        $request->validate([
            "title" => "required|min:3|max:50",
            "description"=> "required|min:3|max:255",
            "published_year"=> ["required", "integer"],
            "author"=> "required|integer"
        ]);

        Book::create([
            "title" => $request->title,
            "description"=> $request->description,
            "published_year"=>$request->published_year,
            "author_id"=> $request->author
        ]);
        
        return redirect('/libros');
    }
}
