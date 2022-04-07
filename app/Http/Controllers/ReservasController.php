<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\reservas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($usuario)
    {   
        
        $reservas = new reservas();
        $reservado = $reservas->reservarAll($usuario);
        
        if($reservado->isEmpty()){
            //Retornar notificacion diciendo que no hay nada reservado
            return back();
        }
        
        return view('reservas.index', compact('reservado'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($libro)
    {
        //
        $reservas = new reservas();
        $libro = $reservas->reservarLibro($libro);
        
        
        return view('reservas.create', compact('libro'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Falta el requestForm
        //Y pasar esto para el modelo

        
        $id_usuario = $request['id_usuario'];
        $id_libro = $request['id_libro'];
        $cantidad = $request['cantidad'];
        $total   = $request['total'];

        $reservas = new reservas();

        $reservas->id_usuario = $id_usuario;
        $reservas->id_libro = $id_libro;
        $reservas->cantidad = $cantidad;
        $reservas->total = $total;
        
        $reservas->save();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function show(reservas $reservas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function edit(reservas $reservas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reservas $reservas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reservas  $reservas
     * @return \Illuminate\Http\Response
     */
    public function destroy(reservas $reservas)
    {
        
        //Pasarla al modelo 
        //returnar todas las reservas de nuevo
        // return redirect()->route('libros.index');
        echo $reservas;
        echo $reservaEliminada = DB::table('reservas')->where('id_usuario', $reservas->id)->get();
    }
}
