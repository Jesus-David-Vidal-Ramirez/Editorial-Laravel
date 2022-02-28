<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;

use App\Http\Requests\CreateLibrosRequest;
use Illuminate\Auth\Events\Validated;

class LibrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
       
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
    public function store(CreateLibrosRequest $request)
    {
        //
        // echo 'Acabas de crear un libro';
        $libro = new Libros();
        // $camposrequerido = $request->validate(
        //     [
        //         'name' => 'mo',
        //     ]
        // );
      
        $LibroCreado = $libro->CreateLibro($request);
        
        
        return redirect()->route('libros.show', $LibroCreado);
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
        // echo $libros . 'mi libro';
        // echo 'Acabas de buscar un libro <br>' ;
       return view('libros.show', compact('libros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function edit(Libros $libros)
    {
        // echo $libros;
        // echo 'edit';
       return view('libros.edit', compact('libros'));
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
        $UpdateLibro = new Libros();

        $libro = $UpdateLibro->UpdateLibro($request, $libros);
        
        return redirect()->route('libros.show' , $libro);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Libros  $libros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libros $libros)
    {
        $EliminarLibro = new Libros();

        $EliminarLibro->DestroyLibro($libros->id);
        
        return redirect()->route('libros.index');
    }
}
