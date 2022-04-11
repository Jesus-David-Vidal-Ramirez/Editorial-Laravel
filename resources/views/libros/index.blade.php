@extends('layouts.app')

@section('title')
    Libros
@endsection

@section('contenido')
<div class="my-5">
    Libros
</div>
@foreach ($misLibros as $item)
    <div class="card-group">
        <div class="card mx-1 my-2">
            <figure class="d-flex">

                <img src="{{ asset('Imagenes/cienañosdesoledad.png')}}" class="card-img-top" alt="{{ $item->imagen}}">

                @if( $item->descuento > 0)
                    <div class="descuento">
                        {{ $item->descuento}}
                    </div>
                @endif

            </figure>
            <div class="card-body">
                <h5 class="card-title">{{ $item->nombre}}</h5>
                <p class="card-text">{{ $item->descripcion}}</p>


                <div class="d-flex">
                    <div class="bg-light w-100 p-2">
                        <p class="card-text"><small class="text-muted">{{ $item->autor}}</small></p>
                        

                        <p class="card-text"><small class="text-muted">{{ $item->precio}}</small></p>
                        <p class="card-text"><small class="text-muted">{{ $item->editorial}}</small></p>
        
                        
                    </div>
                    
                    <div class="bg-light w-100 p-2 justify-content-center align-items-center d-flex">
                        <div class="div">

                            <a href="{{route('reservas.create', $item->id) }}" class="navbar-brand text-light badge bg-warning w-100">Reservar libro</a>
                             
                            <a href="{{route('compras.index', $item->id) }}" class="navbar-brand text-light badge bg-danger w-100">Comprar libro</a>
                            
                            <a href="{{ route('calificacion.show', $item->id) }}" class="navbar-brand text-light badge bg-info w-100">Calificacion libro</a>
                        </div>
                    </div>

                </div>
                
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center py-0">
                <p class="m-0">
                    {{ $item->lanzamiento}}
                </p>
                <a href="{{ route('libros.show', $item->id) }}" class="navbar-brand m-0">Ver Mas</a>
            </div>
        </div>

        <div class="card mx-1 my-2">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card mx-1 my-2">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
    
@endforeach


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


@endsection

