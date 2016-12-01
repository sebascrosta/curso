@extends('layouts.app')

@section('content')
<form action="/movies" method="post">
    {{ csrf_field() }}
    <div class="form-group">
        @if($errors->has('title'))
            @foreach($errors->get('title') as $error)
            <span class="text-danger">{{ $error }}</span>
            @endforeach
        @endif
        <input value="{{ old('title') }}" class="form-control" type="text" name="title" placeholder="Title">
    </div>

    <div class="form-group">
        @if($errors->has('rating'))
            @foreach($errors->get('rating') as $error)
                <span class="text-danger">{{ $error }}</span>
            @endforeach
        @endif
        <input value="{{ old('rating') }}" class="form-control" type="number" name="rating" placeholder="Rating (0 a 10)" step="any">
    </div>

    <div class="form-group">
        @if($errors->has('release_date'))
            @foreach($errors->get('release_date') as $error)
                <span class="text-danger">{{ $error }}</span>
            @endforeach
        @endif
        <input value="{{ old('release_date') }}" class="form-control" type="date" name="release_date" placeholder="Release Date">
    </div>

    <div class="form-group">
        @if($errors->has('awards'))
            @foreach($errors->get('awards') as $error)
                <span class="text-danger">{{ $error }}</span>
            @endforeach
        @endif
        <input value="{{ old('awards') }}" class="form-control" type="number" name="awards" placeholder="Awards">
    </div>

    <div class="form-group">
        <select class="form-control" name="genre_id">
            <option value="">Select a genre...</option>
            @foreach($genres as $genre)
            <option value="{{ $genre->id }}" @if(old('genre_id') == $genre->id) selected @endif>{{ $genre->name }}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create movie!</button>
</form>
@endsection