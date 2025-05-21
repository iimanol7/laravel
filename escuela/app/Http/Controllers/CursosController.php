<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Profesor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class CursosController extends Controller
{
    public function index(){
        $cursos = Curso::with('profesor')->get();
        return view('cursos', compact('cursos'));
    }

    public function nuevo(){
        $niveles = Curso::distinct()->pluck('nivel');
        $profesores = Profesor::all();
        return view('crear.curso', compact('niveles', 'profesores'));
    }

    public function crear(Request $request){
        $request->validate([
            "nombre"=>'required|min:3|max:20',
            "nivel"=>'required',
            "horas"=>'required|integer',
            "profesor_id"=>'required',
        ]);

        Curso::create([
            "nombre"=>$request->nombre,
            "nivel"=>$request->nivel,
            "horas"=>$request->horas,
            "profesor_id"=>$request->profesor_id,
        ]);

        return redirect('/cursos');
    }

    public function editar($id){
        $niveles = Curso::distinct()->pluck('nivel');
        $profesores = Profesor::all();
        $curso = Curso::find($id);
        return view('modificar.curso', compact('niveles', 'profesores', 'curso'));
    }

    public function modificar($id, Request $request){
        $request->validate([
            "nombre"=>'required|min:3|max:20',
            "nivel"=>'required',
            "horas"=>'required|integer',
            "profesor_id"=>'required',
        ]);

        $curso = Curso::find($id);

        $curso->update([
            "nombre"=>$request->nombre,
            "nivel"=>$request->nivel,
            "horas"=>$request->horas,
            "profesor_id"=>$request->profesor_id,
        ]);

        return redirect('/cursos');
    }

    public function alumnos($id){
        $curso = Curso::find($id);
        $alumnos = $curso->alumnos;

        return view('ver.alumnosCurso', compact('curso', 'alumnos'));
    }
}
