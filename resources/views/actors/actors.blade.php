@extends('layouts.index')
@section('content')

<div class="container">
{{-- {{$actores}} --}}
    <div class="">
      <form class="" action="/actors/search" method="get">
        <input type="text" name="q" value="">
        <input type="submit" name="" value="BUSCAR">
      </form>
    </div>

    <h1>Actores</h1>
    <table class=" table table-sm">
      <thead class="thead-light">
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Rating</th>
          <th scope="col">Movies</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($actores as $actor)
          <tr>
            <td><a href="/actors/{{$actor->id}}">{{$actor->full_name}}</a></td>
            <td>{{$actor->rating}}</td>
            <td>{{$actor->pelis_count}}</td>
          </tr>
        @endforeach
      </tbody>  
    </table>
      {{ $actores->links('pagination::bootstrap-4') }}
</div>
@endsection
