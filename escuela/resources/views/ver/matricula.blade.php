@extends('layout.layout')
@section('content')
    <h1>Matricula para {{ $alumno->nombre }}</h1>

    <form action="/alumnos/{{$alumno->id}}/matricular" method="POST">
        @csrf
        
        @foreach ($cursos as $curso)
            <div>
                <input type="checkbox" name="cursos[]" value="{{$curso->id}}" <?= in_array($curso->id, $cursosAlumno) ? 'checked' : '' ?>>{{$curso->nombre}}
                {{-- @if (in_array($curso->id, $cursosAlumno))
                <input type="checkbox" name="cursos[]" value="{{$curso->id}}" checked>{{$curso->nombre}}
                @else
                <input type="checkbox" name="cursos[]" value="{{$curso->id}}">{{$curso->nombre}}
                @endif --}}
            </div>
        @endforeach
        <button>Enviar</button>
    </form>

@endsection