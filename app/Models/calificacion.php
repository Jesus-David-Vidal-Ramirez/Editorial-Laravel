<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libros;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
class calificacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'comentario',
        'calificacion',
        'id_libro',
        'id_usuario'
    ];

    public function calificacionDeUnLibro(Libros $libros){

        // $calificacion = DB::table('calificacions')->join('libros')->join('user')->where('libros.id' , $libros->id);

        return 'Un libro con toda la data de calificacion' ;
    }

    public function calificacionDeLibros(){

        // $calificacion = DB::table('calificacions')->join('libros')->join('user');
        return 'Todos los libros y usuarios que calificaron';
    }


    public function registrarCalificacion(Request $request){

        
        $calificacion = new calificacion();

        // $calificacion->comentario = $request->comentario;
        // $calificacion->calificacion = $request->calificacion;
        // $calificacion->id_usuario = $request->id_usuario;
        // $calificacion->id_libro = $request->id_libro;
        $calificacion = calificacion::create($request->all());
        
        $calificacion->save();
        return $calificacion;
    }
}
