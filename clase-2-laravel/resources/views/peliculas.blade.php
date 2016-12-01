@extends('layouts.app')

@section('contenido')

    <form action="/peliculas" method="get">

        <input type="text" name="query" value="">
        <button type="submit">Enviar</button>

    </form>


    @foreach($peliculas as $pelicula)
        <ul><li>
            <h1>{{ $pelicula->title }}</h1>
            <h2>{{ $pelicula->rating }}</h2>
        </li></ul>
    @endforeach
@endsection
