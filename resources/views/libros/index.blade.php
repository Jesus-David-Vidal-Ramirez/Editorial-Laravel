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
    <br/>
    {{-- Mirar las todas las reservas de ese usuario --}}
   
    <a href="{{route('reservas.create', $item->id) }}">Reservar libro</a><br/>

    <a href="{{route('compras.index', $item->id) }}">Comprar libro</a><br/>

    <a href="{{ route('libros.show', $item->id) }}">Ver Mas Informacion Del libro</a><br/>

    <a href="{{ route('calificacion.show', $item->id) }}">Calificacion libro</a>
    <br>
@endforeach

<h3>Crear libro &#10004;</h3>
<a href="{{ route('libros.create') }}">Crear un nuevo libro</a>

<h3>Buscar libro &#10004; </h3>
{{-- <form method="get" action="{{ route('libros.show') }}">
    @csrf
    <label>Buscar</label>
    <input type="text" name='libroABuscar'>
    <input type="submit" value="Buscar Libro">
</form> --}}


<h3>Edit del libro &#10004;</h3>


<h3>Eliminar Un Libro  &#10004;</h3>



<h3>Mostrar todas las calificaciones &#10004;</h3>
<h3>Mostrar las calificaciones de un libro &#10004;</h3>
<h3>Registrar calificacion de un libro &#10004;</h3>

<h3>
    @if (Auth::check()) 
            <a href="{{route('reservas.index', auth()->user()->id )}}">Todas las Reservar de un libro</a><br/>
    @endif
    <h3>Mostrar todas las reservas solo loguin &#10004;</h3>

</h3>


