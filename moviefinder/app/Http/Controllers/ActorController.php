<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Actor;

class ActorController extends Controller
{
    public function showAllActors(){
        $allActors = Actor::all();

        return view('actors', [
            'actors' => $allActors
        ]);
    }

    public function searchByName(Request $request){
        $actors = Actor::where('first_name', 'LIKE', '%'.$request->input('query').'%')
            ->orWhere('last_name', 'LIKE', '%'.$request->input('query').'%')->get();

        return view('actors', [
            'actors' => $actors,
        ]);
    }

    public function showActorById($id){
        $actor = Actor::find($id);

        return view('actor', [
            'actor' => $actor
        ]);
    }

    public function showAddActor(){
        return view ('addActor');
    }

    public function addActor(Request $request){
        $actor = new Actor();
        $actor->first_name = $request->input('first_name');
        $actor->last_name = $request->input('last_name');
        $actor->rating = $request->input('rating');

        $actor->save();

        return view ('actorAdded');
    }
}
