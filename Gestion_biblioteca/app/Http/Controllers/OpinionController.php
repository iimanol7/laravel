<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    public function index(){
        //sacamos las opiniones JUNTO A LOS LIBROS A LOS QUE PERTENECEN (WITH)
        $opiniones = Opinion::with('book')->OrderBy('id', 'desc')->paginate(10);

        return view('opiniones', compact('opiniones'));
    }

    public function nuevo(){
        $libros = Book::all();
        return view('crear.opinion', compact('libros'));

    }
    
    public function crear(Request $request){
       
        $request->validate([
            'book_id' => 'required|integer',
            'username' => 'required',
            'rating' => 'integer|min:1|max:5',
            'comment' => 'required',
        ]);

        Opinion::create([
            'book_id' => $request->book_id,
            'username' => $request->username,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
        
        return redirect('/opiniones');
    }
}
