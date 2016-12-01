@extends('layouts.app')

@section('content')

    @foreach($movies as $movie)
    <div class="row">
        <div class="col-md-7 col-md-offset-1">
            <a href="/movie/{{ $movie->id }}">{{ $movie->title }}</a>
        </div>
        <div class="col-md-4">
            {{ $movie->rating }}
        </div>
    </div>
    @endforeach
@endsection