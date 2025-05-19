<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function index(){
        $profesores = Profesor::all();
        return view('profesores', compact('profesores'));
    }

    public function nuevo(){
        //Filtramos las profesiones de la tabla de profesores
        // $profesiones = Profesor::select('profesion')->distinct()->get();
        $profesiones = Profesor::distinct()->pluck('profesion'); //nombre de la columna
        return view('crear.profesor', compact('profesiones'));
    }

    public function crear(Request $request){
        $request->validate([
            'nombre'=> 'required|string',
            'profesion'=> 'required|string',
            'grado'=> 'required|integer|min:1|max:6',
            'telefono'=> 'required|string',
        ]);

        Profesor::create([
            'nombre'=>$request->nombre ,
            'profesion'=>$request->profesion ,
            'grado'=>$request->grado ,
            'telefono'=>$request->telefono ,
        ]);
        return redirect('/profesores');
    }
}
