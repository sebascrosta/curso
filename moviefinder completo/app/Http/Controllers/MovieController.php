<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Movie;
use Illuminate\Auth\AuthManager;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home()
    {
        $movies = \App\Movie::orderBy('rating', 'DESC')->paginate(3);

        return view('movies', ['movies' => $movies]);
    }

    public function find(Request $request)
    {
        $movies = \App\Movie::best()->orderBy('rating', 'desc')->get();

        return view('movies', ['movies' => $movies]);
    }

    public function show($id)
    {
        $movie = \App\Movie::find($id);

        if (!$movie) {
            abort(404);
        }

        return view('movie', ['movie' => $movie]);
    }

    public function createForm(Gate $gate)
    {
//        if ($gate->denies('create-movies')){
//            return redirect('/home');
//        }

        $genres = \App\Genre::all();

        return view('movies.create', [
            'genres' => $genres,
        ]);
    }

    public function store(Request $request)
    {
//        \Validator::extend('complex_password', function($attribute, $value, $parameters, $validator){
//            return preg_match('/\d.*[A-Z]/', $value);
//        });

        $validation = \Validator::make(
            $request->all(),
            [
                'title' => 'required',
                'rating' => ['required', 'numeric', 'between:0,10'],
//                'password' => 'complex_password',
            ]
        );

        if ($validation->fails()) {
            return redirect()->back()
                ->withInput()
                ->withErrors($validation->errors());
        }

        $data = $request->only(['title', 'rating', 'awards','release_date','genre_id']);
        $movie = \App\Movie::create($data);

//        $movie = \App\Movie::create([
//            'title' => $request->input('title'),
//            'rating' => $request->input('rating'),
//            'awards' => $request->input('awards'),
//            'release_date' => $request->input('release_date'),
//            'genre_id' => $request->input('genre_id'),
//        ]);

        return redirect('/movies/'.$movie->id);
    }

    public function storeFormRequests(CreateMovieRequest $request, Gate $gate)
    {
        $user = \Auth::user();

        if ($user->cannot('create', Movie::class)) {
            abort(403);
        }
        
//        if (!$gate->allows('create-movies')) {
//            abort(403);
//        }

        $data = $request->only(['title', 'rating', 'awards','release_date','genre_id']);
        $movie = \App\Movie::create($data);

        return redirect('/movies/'.$movie->id);
    }

    public function apiIndex(){
        return \App\Movie::with('genre')->get();
    }

    public function apiShow($id){
        $movie = \App\Movie::find($id);

        $movie->makeVisible('rating');
        $movie->makeHidden('url');

        return $movie;
    }
}
