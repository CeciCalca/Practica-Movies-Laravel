<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1>{{$Movie->title}}</h1>
      <table class="table table-dark">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Lenght</th>
            <th scope="col">Rating</th>
            <th scope="col">Genero</th>
            <th scope="col">Awards</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>{{$Movie->length}}</td>
            <td>{{$Movie->rating}}</td>
            <td>@if ($Movie->genre_id == null)
                  "no especifica"
                @else {{$Movie->genre->name}}
            @endif</td>
            <td>{{$Movie->awards}}</td>
          </tr>
        </tbody>
      </table>
      <table>
        <thead>
          <tr>
            <th scope="col">Actores</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($Movie->actors as $actors)
          <tr>
            <td>
              <a href="/actors/{{$actors->id}}">
                {{$actors->full_name}}
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
