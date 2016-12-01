@extends('layouts.app')

@section('content')

    @if (isset($actor))

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul>
                    <li><h1>{{ $actor->first_name . " " . $actor->last_name}}</h1></li>
                    <li><h2>Rating {{ $actor->rating }}</h2></li>
                </ul>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <h1>No hay actores en la base de datos.</h1>
            </div>
        </div>
    @endif
@endsection