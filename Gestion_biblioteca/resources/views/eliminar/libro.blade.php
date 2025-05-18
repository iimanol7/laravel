<h1>Seguro que quieres eliminar al Libro: {{ $libro->title }}</h1>
<form action="/libros/{{$libro->id}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">Confirmar</button>
    <a href="/libros">Cancelar</a>
</form>
