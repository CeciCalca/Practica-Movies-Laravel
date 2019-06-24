{{-- {{$genre}} --}}
@extends('layouts.index')
@section('content')
  <div class="container">
    <div class="row">
  @foreach ($genre as $key => $value)
      <div class="col-4">
        <table class="table">
          <thead class="thead-light">
            <tr>
              <th scope="col">{{$value->name}}</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($value->movies as $movie)
            <tr>
              <td>
                <a href="/movies/{{$movie->id}}">{{$movie->title}}</a>
              </td>
            </tr>
          @endforeach
          </tbody>
        </table>
      </div>
  @endforeach
    </div>
</div>
@endsection
