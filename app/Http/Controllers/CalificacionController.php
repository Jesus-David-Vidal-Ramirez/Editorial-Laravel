<?php

namespace App\Http\Controllers;

use App\Models\calificacion;
use App\Models\Libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         //lo mismo del show pero sin el where
        $calificacion = new calificacion();
        $calificaciones = $calificacion->calificacionDeLibros();

        return view('calificacion.index', compact('calificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       echo 'se Guardo esta calificacion';

       

       $calificacion = new calificacion();
        
       $calificacion->registrarCalificacion($request);

       
       return redirect()->back();
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libros)
    {
        
        
        $calificaciones = DB::table('calificacions')->where('Id_Libro' , $libros->id)->get();
        
        //Aqui obtengo el libro 
        // SELECT * FROM calificacions c INNER JOIN libros l  ON l.id = c.id_libro INNER JOIN users u ON u.id = c.Id_Usuario  WHERE l.id = 1;
        // $calificacion = new calificacion();
        // echo $calificacion->calificacionDeUnLibro($libros);
         
        return view('calificacion.show', compact('libros', 'calificaciones'));
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function edit(calificacion $calificacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calificacion $calificacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(calificacion $calificacion)
    {
        //
    }
}
