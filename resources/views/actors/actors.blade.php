$<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
      <thead>
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
</div>
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
