<h1>Crea un libro marrano</h1>
<form method="post" action="{{ route('libros.store') }}">
    @csrf
    <label>isbn </label>
    <input name='Id_Libro' type="text">
    <label>Nombre </label>
    <input name='nombre' type="text">
    <label>Autor </label>
    <input name='autor' type="text">
    <input name='crearLibro' type="submit" value="Registrar">
</form>