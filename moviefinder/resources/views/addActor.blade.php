@extends('layouts.app')

@section ('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="/actorAdded" method="get">
                    <div class="form-group">
                        <label for="first_name">Nombre:</label>
                        <input type="text" class="form-control" name="first_name">
                    </div>

                    <div class="form-group">
                        <label for="last_name">Apellido</label>
                        <input type="text" class="form-control" name="last_name">
                    </div>

                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input type="text" class="form-control" name="rating">
                    </div>

                    <button type="submit" class="btn btn-default">Guardar</button>
                </form>
            </form>
        </div>
    </div>

@endsection