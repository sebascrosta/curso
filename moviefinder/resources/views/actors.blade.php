@extends('layouts.app')

@section('content')

    @forelse($actors as $actor)

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul>
                    <li><h1><a href="/actor/{{ $actor->id }}">{{ $actor->first_name . " " . $actor->last_name}}</a></h1></li>
                </ul>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>No hay actores en la base de datos.</h1>
            </div>
        </div>
    @endforelse
@endsection