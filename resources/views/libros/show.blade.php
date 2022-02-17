@extends('layouts.app')
Informacion completa y ordenada del libro
{{ $libros }}

<p>Edicion de este libro solo admin</p>
<a href="{{ route('libros.edit', $libros) }}">Editar el libro </a>

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
          
          <form action="{{ route('libros.destroy', $libros)}}" method="post">
            @csrf
            @method('delete')
            <input class="btn btn-danger" value="Eliminar" type="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
 