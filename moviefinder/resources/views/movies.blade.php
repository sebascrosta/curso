@extends('layouts.app')

@section('content')

    @forelse($movies as $movie)

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
            <ul>
                <li><h1><a href="/movie/{{ $movie->id }}">{{ $movie->title }}</a></h1></li>
                <li><h2>Rating: {{ $movie->rating }}</h2></li>
                <li>Premios:  {{ $movie->awards}}</li>
                <li>Estreno: {{ $movie->release_date }}</li>
                <li>Duración: {{ $movie->length }} minutos</li>
            </ul>
            <div class="h-divider"></div>
            </div>
        </div>
    @empty
        <div class="row">
           <div class="col-md-8 col-md-offset-2">
               <h1>No se encontraron películas con ese título</h1>
            </div>
        </div>
    @endforelse

@endsection