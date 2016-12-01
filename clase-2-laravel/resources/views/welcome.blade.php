@extends('layouts.app')

@section('contenido')
  <div class="flex-center position-ref full-height">
      @if (Route::has('login'))
          <div class="top-right links">
              <a href="{{ url('/login') }}">Login</a>
              <a href="{{ url('/register') }}">Register</a>
          </div>
      @endif

      <div class="content">
          <div class="title m-b-md">
              Laravel <br>
          </div>

          <form action="/" method="get">
            {{ csrf_field() }}
            <input type="text" name="query" value="">
            <button type="submit">Enviar</button>

          </form>


      </div>
  </div>
@endsection
