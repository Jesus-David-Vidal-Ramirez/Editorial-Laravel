<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;


class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        //
        $libros = new Libros();
        $misLibros = $libros->SelectAll();

        return view('libros.index', compact('misLibros'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('libros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        echo 'Acabas de crear un libro';
        echo $request['autor'];
        echo $request['nombre'];
        echo $request['Id_Libro'];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libros)
    {
        //
        echo 'Acabas de buscar un libro ' ;
        echo '<br>' . $libros['libroABuscar'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit($Id_Libro)
    {
        //
        
       return view('libros.edit', compact('Id_Libro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libros $libros)
    {
        //
        echo $request['autor'] . '<br>';
        echo $request['nombre']. '<br>';
        echo $request['Id_Libro']. '<br>';
        echo 'update';
        // return $this->show($request);
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libros $libros)
    {
        //
    }
}
