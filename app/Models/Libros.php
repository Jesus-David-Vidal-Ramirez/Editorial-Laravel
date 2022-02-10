<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Libros extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_libro',
        'nombre',
        'autor',
        'editorial',
        'descripcion',
        'imagen',
        'precio',
        'cantidad',
        'lanzamiento',
        'descuento',
    ];


    public function SelectAll(){
        $libros = DB::table('libros')->get();
        
        return collect($libros);
    }

    public function SelectOne($Id_Libro){

        $libroABuscar = DB::table('libros')->where('Id_Libro', $Id_Libro)->get();
        echo $libroABuscar;

        return $libroABuscar;

    }

    public function CreateLibro(Libros $libro){

        echo $libro;

        $libroCreado = DB::table('libros', $libro)->create();

        echo 'Creado ' . $libroCreado;
        return $libroCreado;
    }

    public function EditLibro($Id_Libro){
        $libroAEditar = DB::table('libro')->where('Id_Libro', $Id_Libro)->get();
        echo $libroAEditar;

        return $libroAEditar;
    }


    public function UpdateLibro(Request $request, Libros $libro){
        
        // $libroActualizado = DB::table('libros')->update($libro);
    }

    public function DestroyLibro($Id_Libro){

        $libroEliminado = DB::table('libro')->where('id_libro', $Id_Libro);
       
        return $libroEliminado;
    }


}
