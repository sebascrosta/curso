@extends('layouts.app')

@section ('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/movieAdded" method="get">
                <div class="form-group">
                    <label for="title">Título:</label>
                    <input type="text" class="form-control" name="title">
                </div>

                <div class="form-group">
                    <label for="rating">Rating</label>
                    <input type="text" class="form-control" name="rating">
                </div>

                <div class="form-group">
                    <label for="release_date">Fecha de estreno (aaaa-mm-dd)</label>
                    <input type="text" class="form-control" name="release_date">
                </div>


                <div class="form-group">
                    <label for="length">Duración</label>
                    <input type="number" class="form-control" name="length">
                </div>

                <div class="form-group">
                    <label for="awards">Premios</label>
                    <input type="number" class="form-control" name="awards">
                </div>

                <button type="submit" class="btn btn-default">Guardar</button>
            </form>
            </form>
        </div>
    </div>

@endsection