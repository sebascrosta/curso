<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeliculasController extends Controller
{
    public function listado(){
      return view ('peliculas');
    }

    public function ver($id){
      return "Película número $id";
    }

    public function prueba(Request $request){
      return "El pedido fue: " . $request->input('nombre');
    }
}
