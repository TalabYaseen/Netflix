<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <title>netflix</title>
</head>
<body>
    <h1>All Movies</h1>
    <h1>{{session()->get('name');}}</h1>
    <a href="{{route('netflix.create')}}"><button type="button" class="btn btn-success">Add New movie</button></a>
    <div class="row">
    @foreach ($movies as $movie)
    {{-- {{dd($movie->images)['picture_name']}}; --}}
    
    <?php $rr = $movie->images?>
    <?php 
    ?>
    <div class="card" style="width: 25rem;">
        @foreach ($rr as $item)
        <img src="{{URL::asset("storage/image/$item->picture_name")}}" class="card-img-top" alt="..." style="hight:30vh" >
        @endforeach
        <div class="card-body">
          <h5 class="card-title">{{$movie['movie_name']}}</h5>
          <p class="card-text">{{$movie['movie_description']}}</p>
          <a href="{{route('netflix.edit',$movie->id)}}" class="btn btn-primary">Edit</a>
        </div>
      </div>
    @endforeach
</div>
    {{-- @foreach ($movies as $movie)
        <tr>
        <td>{{$movie['id']}}</td>
        <td>{{$movie['movie_name']}}</td>
        <td>{{$movie['movie_gener']}}</td>
        <td><img src="{{URL::asset("storage/image/$movie->picture_name")}}" alt="ggggg" srcset=""></td>
        <td>{{$movie['movie_description']}}</td>
        <td><a href="{{route('netflix.edit',$movie->id)}}">edit</a></td>
        <td>
            <form action="{{route('netflix.destroy',$movie->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
        </form>
        </td>
        </tr>
    @endforeach
    </table> --}}
</body>
</html>