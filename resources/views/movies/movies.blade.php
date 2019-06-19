<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="clearfix">
        <h1 class="float-left">MOVIES</h1>
        <a href="/movies/new"> <button type="button" class="btn btn-primary float-right">+ new movie</button></a>
      </div>

          <table class="table">
            <thead class="thead-dark">
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
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
