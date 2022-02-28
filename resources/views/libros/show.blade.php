@extends('layouts.app')
Informacion completa y ordenada del libro
{{ $libros }}

<p>Edicion de este libro solo admin</p>
<a href="{{ route('libros.edit', $libros )}}">Editar el libro </a>

<p>Vas a eliminar este libro?</p>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          
          <form action="{{ route('libros.destroy', $libros )}}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-danger" value="Eliminar" type="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
 
  <div>
    <h6>calificar Libro</h6>
    
    {{-- Si esta logueado puede calificar --}}
    {{-- Al presionar el botton desplegar informacion --}}
    {{-- agregarla si se loguea y es correcta como hacer esto no se aun --}}
    <button>Calificar</button>
    <form method="post" action="{{route('calificacion.store') }}">
      @csrf
      <label>Comentario</label>
      <input type="text" name="comentario">
      <br>
      <label>Calificacion</label>
      <input type="range" name="calificacion">
      <br>
      {{-- id Usuario --}}
      <input type="hidden" value="1" name="id_usuario">
      {{-- id libro --}}
      <input type="text" value="{{$libros->id }}" name="id_libro">
      <br>
      <input type="submit" value="Registrar Calificacion">
    </form>
  </div>

  <div>
    <h6>Ver calificaciones del libro</h6>
    <a href="{{ route('calificacion.show', $libros )}}">Calificaciones de este libro </a>
  </div>