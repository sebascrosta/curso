@extends('layouts.app')

@section('content')
    <h1>Movies</h1>

    @foreach($movies as $movie)
        <h2>
            <a href="/movies/{{ $movie->id }}">{{ $movie->title }}</a> <span class="badge">{{ $movie->rating }}</span>
        </h2>
    @endforeach
    {{ $movies->links() }}
@endsection
