<h1>Crea un libro marrano</h1>
<form method="post" action="{{ route('libros.store') }}">
    @csrf

    <label>isbn </label>
    <input name='id_libro' type="text" value ="{{old('id_libro')}}" >
    <br>
    {{--Para un update   --}}
    {{-- <input name='id_libro' type="text" value ="{{old('id_libro', $libro->id_libro)}}" > --}}
    @error('id_libro')
        <br>
        <small>Error {{ $message }} </small>
    @enderror

    <br>
    <label>Nombre </label>
    <input name='nombre' type="text" value="{{ old('nombre')}}">
    <br>
    @error('nombre')
        <br>
        <small>{{$message}}</small>
    @enderror
    <br>

    <label>Autor </label>
    <input name='autor' type="text">
    <br>
    @error('autor')
        <br>
        <small>{{$message}}</small>    
    @enderror
    <br><br>
    <label>Editar
    <input name='editar' type="text">
    </label>
    <label>Descripcion Detallada </label>
    <input name='descripcion_detallada' type="text">
    <label>Descripcion </label>
    <input name='descripcion' type="text">
    <br><br>
    <label>Imagen </label>
    <input name='imagen' type="text">
    <label>Precio </label>
    <input name='precio' type="text">
    <label>Cantidad </label>
    <input name='cantidad' type="text">
    <br><br>
    <label>Lanzamiento </label>
    <input name='lanzamiento' type="text">
    <label>Descuento </label>
    <input name='descuento' type="text">
    <br><br>
    <input name='crearLibro' type="submit" value="Registrar">
</form>