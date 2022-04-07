<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class reservas extends Model
{
    use HasFactory;

    protected $table= 'reservas';
    public $timestamps  = 'true';

    protected $fillable = [];


    public function reservarAll($usuario){
        //SELECT * FROM reservas r INNER JOIN libros l ON l.id = r.Id_Libro INNER JOIN users u ON  r.Id_Usuario = u.id WHERE r.Id_Usuario = 3
        
        $reservado = DB::table('reservas')
                        ->join('libros', 'libros.id', '=', 'reservas.id_libro')
        //                 ->join('users', 'users.id', '=' , 'reservas.id_usuario')
                        ->where('reservas.id_usuario', 1)
                        ->get();

        // $reservado = DB::table('reservas')
        //                 ->join('libros', function ($join) {
                            
        //                     $join->on('libros.id', '=', 'reservas.id_libro')
        //                     ->where('reservas.id_usuario', '=', $usuario );      
        //                 })
        //                 ->get();
        
        echo $reservado;
        return $reservado;
    }


    public function reservarLibro($libro){

        $libro = DB::table('libros')->where('id', $libro)->get();

        return $libro;
    }

    public function eliminarReserva(){

    }



}
