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
  @foreach ($posts as $post)
    <div class="post">
      <ul>
        <li>Id: {{$post->id}}</li>
        <li>Title: {{$post->title}}</li>
        <li>Subtitle: {{$post->subtitle}}</li>
        <li>Description: {{$post->description}}</li>
        <li>Author: {{$post->author}}</li>
        <li>Date: {{$post->date}}</li>
          <form action="{{route('posts.destroy', $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">DELETE</button>
          </form>
        </li>
      </ul>
    </div>
  @endforeach
</div>
</body>
</html>
