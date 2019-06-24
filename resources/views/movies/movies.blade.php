@extends('layouts.index')
@section('content')

    <div class="container">
      <div class="clearfix">
        <h1 class="float-left">MOVIES</h1>
        <a href="/movies/new"> <button type="button" class="btn btn-primary float-right">+ new movie</button></a>
      </div>

          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Rating</th>
                <th scope="col">Genero</th>
                <th scope="col">Awards</th>
                <th scope="col">Detail</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($movies as $movie)
                <tr>
                  <th scope="row">{{$movie->id}}</th>
                  <td>{{$movie->title}}</td>
                  <td>{{$movie->rating}}</td>
                  <td>@if ($movie->genre_id == null)
                        "no especifica"
                      @else {{$movie->genre->name}}
                  @endif
                </td>
                  <td>{{$movie->awards}}</td>
                  <td>
                    <a href="/movies/{{$movie->id}}">
                      <i class="fas fa-info-circle"></i>
                    </a>
                  </td>
                  <td>
                    <a href="/movies/update/{{$movie->id}}">
                      <i class="fas fa-pen"></i>
                    </a>
                  </td>
                  <td>
                    <a href="/movies/delete/{{$movie->id}}">
                      <i class="fas fa-trash-alt"></i>
                    </a>
                  </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
@endsection
