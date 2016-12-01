<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listado(){
      return view ('peliculas');
    }

    public function ver($id){
      $pelicula = \App\Movie::where('id', $id)->get();

        return view('peliculas',[
            'peliculas' => $pelicula,
        ]);
    }

    public function prueba(Request $request){
      return "El pedido fue: " . $request->input('nombre');
    }

    public function peliculas(Request $request){
        $peliculas = \App\Movie::where('title', 'LIKE', '%'.$request->input('query').'%')->get();

        return view('peliculas', [
            'peliculas' => $peliculas,
        ]);
    }
}
