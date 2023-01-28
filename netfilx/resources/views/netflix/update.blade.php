<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Update moive</title>
</head>
<body>
    <h1>Update Movie</h1>
    <form class="form-group mx-sm-3 mb-2" action="{{route('netflix.update',$movie->id)}}" method="post">
        @method('PUT')
        @csrf

        <div class="form-group col-md-4 mb-3">
          <label>Movie Name</label>
          <input type="text" class="form-control"  value="{{$movie['movie_name']}}" name="movie_name" >
        </div>
        <div class="form-group col-md-4 mb-3">
          <label >Movie Picture</label>
          <input type="text" class="form-control" name="movie_pic" value="{{$movie['movie_pic']}}">
        </div>
        <div class="form-group col-md-4 mb-3">
          <label >Movie Description</label>
          <textarea type="text" class="form-control" value="" name="movie_desc" style="height: 10em;text-align:inherit">{{$movie['movie_description']}}
          </textarea>
        </div>
        <div class="form-group col-md-4 mb-3">
          <label >Movie Generation</label>
          <input type="year" class="form-control" name="movie_gen" value="{{$movie['monie_gener']}}">
        </div>
        <button type="submit" class="btn btn-warning">Update</button>
      </form>
</body>
</html>