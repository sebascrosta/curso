@extends('layouts.app')

@section('content')

    @if(isset($movie))
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul>
                    <li><h1>{{ $movie->title }}</h1></li>
                    <li><h2>Rating: {{ $movie->rating }}</h2></li>
                    <li>Premios:  {{ $movie->awards}}</li>
                    <li>Estreno: {{ $movie->release_date }}</li>
                    <li>Duración: {{ $movie->length }} minutos</li>
                </ul>
                <div class="h-divider"></div>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>No se encontró una película con ese ID.</h1>
            </div>
        </div>
    @endif

@endsection