 
        
         Vas a editar un libro
        {{ $Id_Libro}}

        <form method="post" action="{{ route('libros.update', $Id_Libro) }}">
            @csrf
            <label>isbn </label>
            <input name='Id_Libro' type="text" value='{{$Id_Libro}}'>
            <label>Nombre </label>
            <input name='nombre' type="text">
            <label>Autor </label>
            <input name='autor' type="text">
            <input name='crearLibro' type="submit" value="Registrar">
        </form>