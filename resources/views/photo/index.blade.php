<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="posts">
  @foreach ($photos as $photo)
    <div class="post">
      <ul>
        <li>user_id: {{$photo->user_id}}</li>
        <li><img src="{{$photo->img}}" alt=""></li>
        <li>Name: {{$photo->name}}</li>
          {{-- <form action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
          </form> --}}
        </li>
      </ul>
    </div>
  @endforeach
</div>
</body>
</html>
