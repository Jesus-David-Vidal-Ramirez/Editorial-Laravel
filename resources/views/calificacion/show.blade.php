@extends('layouts.app')

@section('title')
    Mis Calificaciones
@endsection

@section('contenido')
    <h3>mis calificaciones</h3>
    {{ $calificaciones }}
    <hr>
    <h3>Mi libro</h3>
    {{ $libros }}
@endsection
