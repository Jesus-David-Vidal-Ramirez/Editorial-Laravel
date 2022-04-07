<h2>Reservar este libro</h2>

{{ $libro }}

<form method="post" action="{{route('reservas.store') }}">
    @csrf
    <label>Libro hidden </label>
    <input type="text" name="id_libro" value="{{ $libro[0]->id }}">
    <label>Usuario hidden </label>
    <input type="text" name="id_usuario" value="{{ auth()->user()->id }}">
    <label>Cantidad</label>
    <input type="number"  name="cantidad" value="">
    <label>Total</label>
    <input type="number" name="total" value="10" >
    <br>
    <input type="submit" value="Guardar">

</form>