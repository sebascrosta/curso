<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Movie;

class MovieController extends Controller
{
    public function bestMovies(){
        $bestMovies = Movie::orderBy('rating', 'DESC')->take(10)->get();
        return view ('index',[
            'movies' => $bestMovies,
        ]);
    }

    public function searchByName(Request $request){
        $movies = Movie::where('title', 'LIKE', '%'.$request->input('movieName').'%')->get();

        foreach($movies as $movie){
            $anio = substr($movie->release_date, 0 ,4);
            $mes = substr($movie->release_date, 5 ,2);
            $dia = substr($movie->release_date, 8 ,2);
            $movie->release_date = $dia .'/'. $mes .'/'. $anio;
        }

        return view('movies', [
            'movies' => $movies,
        ]);
    }

    public function showMovieById($id){
        $movie = Movie::find($id);

        $anio = substr($movie->release_date, 0 ,4);
        $mes = substr($movie->release_date, 5 ,2);
        $dia = substr($movie->release_date, 8 ,2);
        $movie->release_date = $dia .'/'. $mes .'/'. $anio;


        return view('movie',[
            'movie' => $movie,
            ]);
    }

    public function showAddMovie(){
        return view ('addMovie');
    }

    public function addMovie(Request $request){
        $movie = new Movie();
        $movie->title = $request->input('title');
        $movie->rating = $request->input('rating');
        $movie->awards = $request->input('awards');
        $movie->release_date = $request->input('release_date');
        $movie->length = $request->input('length');

        $movie->save();

        return view ('movieAdded');
    }
}
