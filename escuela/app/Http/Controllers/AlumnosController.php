<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index(){
        $alumnos = Alumno::all();
        return view('alumnos', compact('alumnos'));
    }
    
    public function filtrar(Request $request){
        //FILTRAMOS POR NOMBRE
        $request->validate([
            'nombre'=>'required'
        ]);

        $alumnos = Alumno::where('nombre', 'like', '%'.$request->nombre.'%')->get();

        return view('alumnos', compact('alumnos'));
    }

    public function editar($id){
        $alumno = Alumno::find($id);
        return view('modificar.alumno', compact('alumno'));
    }

    public function borrar($id){
        
        $alumno = Alumno::find($id);
        return view('eliminar.alumno', compact('alumno'));
    }
    
    public function modificar($id, Request $request){
        
        $request->validate([
            'nombre'=> 'required|string',
            'edad'=> 'required|integer',
            'telefono'=> 'required|string',
            'direccion'=> 'required|string',
        ]);

        $alumno = Alumno::find($id);
       
        $alumno->nombre = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();

        return redirect('/alumnos');
    }

    public function eliminar($id, Request $request){
        
        Alumno::find($id)->delete();
        return redirect('/alumnos');
    }

    public function nuevo(){
        return view('crear.alumno');
    }

    public function crear(Request $request){
        $request->validate([
            'nombre'=> 'required|string',
            'edad'=> 'required|integer',
            'telefono'=> 'required|string',
            'direccion'=> 'required|string',
        ]);

        $alumno = new Alumno();
       
        $alumno->nombre = $request->nombre;
        $alumno->edad = $request->edad;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->foto = '';
        $alumno->save();

        return redirect('/alumnos');
    }

}
