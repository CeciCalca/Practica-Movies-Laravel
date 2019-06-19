<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
{{-- {{$Actor}} --}}
    <h1>{{$Actor->full_name}}</h1>
    <p>Rating: {{$Actor->rating}}</p>
    <p>Favourite Movie: <a class="text-decoration-none" href="/movies/{{$Actor->movie->id}}">{{$Actor->movie->title}}</a></p></h3>

    <h3>Other movies</h3>
      <table class="table table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">MOVIE</th>
            <th scope="col">RATING</th>
            <th scope="col">AWARDS</th>
            <th scope="col">GENRE</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Actor->pelis as $pelis)
            <tr>
              <td> {{$pelis->title}}</td>
              <td>{{$pelis->rating}}</td>
              <td>{{$pelis->awards}}</td>
              <td>{{$pelis->genre->name}}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
