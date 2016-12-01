@extends('layouts.app')

@section('content')
    <h1>{{ $movie->title }}</h1>

    <p>Rating: {{ $movie->rating }}</p>
    <p>Awards: {{ $movie->awards }}</p>
    <p>Length: {{ $movie->length }}</p>
    <p>Released at: {{ $movie->release_date }}</p>
@endsection
