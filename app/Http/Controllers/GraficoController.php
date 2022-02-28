<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\grafico;
use Illuminate\Support\facades\DB;
class GraficoController extends Controller
{
    //

    public function index(){
        $graficos = new grafico();
        $data = [];
        $graficos = DB::table('graficos')->get();
        // foreach($graficos as $graficos){
        //     $data['Datos'][] = $graficos->Datos;
        //     $data['Valor'][] = $graficos->Valor;
        // }
        // $data['data'] = json_encode($data);
        
        return view('grafico',  compact('graficos') );
        // compact('graficos')
    }
}
