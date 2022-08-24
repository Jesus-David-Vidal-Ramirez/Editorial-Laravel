@extends('layouts.app')

@section('title')
    Mis Reservas
@endsection

@section('contenido')

    <h3>Mis Reservas</h3>

    @foreach ($reservado as $reservas)
        {{ $reservas->nombre }}
        {{ $reservas->Id_Libro }}
        {{ $reservas->id }}
        <a href="{{route('compras.index', $reservas->id ) }}">Comprar libro</a><br/>

        {{-- NO sir ve el eliminar --}}
        <form action="{{ route('reservas.destroy', $reservas->Id_Libro )}}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-danger" value="Eliminar" type="submit">
        </form>
        <br>
        
    @endforeach

    <h5>Comprar</h5>

@endsection

