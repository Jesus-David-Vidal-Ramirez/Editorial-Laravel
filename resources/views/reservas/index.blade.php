<h3>Reservas</h3>



@foreach ($reservado as $reservas)
    {{ $reservas->nombre }}
    {{ $reservas->Id_Libro }}
    {{ $reservas->id }}
    <a href="{{route('compras.index', $reservas->id ) }}">Comprar libro</a><br/>

    <form action="{{ route('reservas.destroy', $reservas->Id_Libro )}}" method="post">
        @csrf
        @method('delete')
        <input class="btn btn-danger" value="Eliminar" type="submit">
      </form>
    <br>
    
@endforeach

<h5>Comprar</h5>

