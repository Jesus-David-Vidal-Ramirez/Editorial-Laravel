Estoy en libros 
<br>

@foreach ($misLibros as $item)
    {{ $item->id}}
    {{ $item->Id_Libro}}
    {{ $item->nombre}}
    {{ $item->autor}}
    {{ $item->editorial}}
    {{ $item->descripcion}}
    {{ $item->descripcion_detallada}}
    {{ $item->imagen}}
    {{ $item->precio}}
    {{ $item->cantidad}}
    {{ $item->lanzamiento}}
    {{ $item->descuento}}
    {{ $item->created_at}}
    {{ $item->updated_at}}
    <br>
@endforeach

<h3>Crear libro</h3>
<a href="{{ route('libros.create') }}">Crear un nuevo libro</a>

<h3>Buscar libro</h3>
<form method="get" action="{{ route('libros.show') }}">
    @csrf
    <label>Buscar</label>
    <input type="text" name='libroABuscar'>
    <input type="submit" value="Buscar Libro">
</form>

<h3>Edit del libro</h3>
<a href="{{ route('libros.edit', 123) }}">Editar el libro </a>

<h3>Eliminar Un Libro</h3>
<a href="{{ route('libros.delete', 123) }}">Eliminar libro</a>