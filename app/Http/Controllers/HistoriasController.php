<?php

namespace App\Http\Controllers;

use App\Models\Historias;
use Illuminate\Http\Request;

class HistoriasController extends Controller
{
    public function index()
    {
        
        $historias = Historias::all();

        return view('welcome')->with('historias', $historias);

    }

    public function store(Request $request)
    {
        
        $datos = request();

        Historias::create([

            'nombre'=>$datos["nombre"],
            'fecha_nac'=>$datos["fecha_nac"],
            'sexo'=>$datos["sexo"],
            'estatura'=>$datos["estatura"],
            'peso'=>$datos["peso"],

        ]);

        return redirect('/')->with('HistoriaAgregada', 'OK');
    }

    public function show($id)
    {
        $historias = Historias::all();
        $historia = Historias::find($id);

        return view('welcome',compact('historias', 'historia'));

    }

  
    public function destroy($id)
    {
        
        Historias::destroy($id);

        return redirect('/');

    }
}
