<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>Add moive</title>
</head>
<body>
    <h1>Add Movie</h1>
    <form class="form-group mx-sm-3 mb-2" action="{{route('netflix.store')}}" method="post"  enctype="multipart/form-data" >

        @csrf

        <div class="form-group col-md-4 mb-3">
          <label>Movie Name</label>
          <input type="text" class="form-control"  placeholder="Enter Movie Name" name="movie_name">
        </div>
        <div class="form-group col-md-4 mb-3">
          <label >Movie Picture</label><br>
          <input type="file" name="movie_pic" class="block w-full text-sm text-gray-500     file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm    file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
        </div>
        <div class="form-group col-md-4 mb-3">
          <label >Movie Description</label>
          <input type="text" class="form-control" placeholder="Enter Movie Description" name="movie_desc">
        </div>
        <div class="form-group col-md-4 mb-3">
          <label >Movie Generation</label>
          <input type="year" class="form-control" name="movie_gen">
        </div>
        <button type="submit" class="btn btn-warning">Submit</button>
      </form>
</body>
</html>