@extends('layouts.app')

@section('title')
    Editar Libro
@endsection

@section('contenido')
    Vas a editar un libro
    {{-- {{ $libros}} --}}

    <form method="post" action="{{ route('libros.update', $libros) }}">
        @csrf
        @method('PUT')
        <label>isbn </label>
        <input name='id_libro' type="text" value='{{ $libros->Id_Libro }}'>
        <label>Nombre </label>
        <input name='nombre' type="text" value="{{ $libros->nombre }}">
        <label>Autor </label>
        <input name='autor' type="text" value="{{ $libros->autor }}">
        <input name='crearLibro' type="submit" value="Editar">
    </form>
@endsection
