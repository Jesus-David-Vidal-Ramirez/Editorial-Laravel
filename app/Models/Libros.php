<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use Illuminate\Database\Query\Grammars\MySqlGrammar;
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

    //Buscar libro Especifico
    public function SelectOne($id){

        $libroABuscar = DB::table('libros')->where('id', $id)->get();


        return $libroABuscar;
    }

    public function CreateLibro(Request $libro){

        // echo $libro;
        // echo $libro->autor;
        // echo $libro->nombre;
        // echo $libro->Id_Libro;
        
        $libros = new Libros();

        $libros = Libros::create($libro->all()); 
        // $libros->id_libro = $libro['id_libro'];
        // $libros->autor = $libro['autor'];
        // $libros->nombre = $libro['nombre'];
        // $libros->editorial = 'N/A';
        // $libro['editorial'];
        // echo $libros->autor;
        // echo $libros->id_libro;
        // echo $libros->nombre;
        //////// validacion
         $libros->save();
        
        // echo $libroCreado;

        // $libroCreado = DB::table('libros', $libros)->save();
        
        // echo $libroCreado;

        // echo 'Creado ' . $libroCreado;
        return $libros;
    }

    // public function EditLibro($Id_Libro){

    //     $libroAEditar = DB::table('libro')->where('Id_Libro', $Id_Libro)->get();
    //     echo $libroAEditar;

    //     return $libroAEditar;
    // }


    public function UpdateLibro(Request $request, Libros $libro){
        
         $libro->Id_Libro = $request['id_libro'];
         $libro->nombre = $request['nombre'];
         $libro->autor = $request['autor'];

         $libro->save();
        
         return $libro;
         
        // $libroActualizado = DB::table('libros')->update($libro);
    }

    public function DestroyLibro($id){
        
        $libroEliminado = DB::table('libros')->where('id', $id)->delete();
       
        return $libroEliminado;
    }


}
