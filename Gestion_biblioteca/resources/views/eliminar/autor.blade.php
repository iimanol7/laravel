<h1>Seguro que quieres eliminar al autor:{{ $autor->name }}</h1>
<form action="/autores/{{ $autor->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button>Aceptar</button>
    <a href="/autores">Cancelar</a>
</form>