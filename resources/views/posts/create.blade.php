<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Inserisci il tuo titolo di giornale</title>
</head>
<body>
  @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
      @endforeach
    </ul>
    </div>
  @endif
  <form class="" action="{{route("posts.store")}}" method="post">
    @csrf
    @method('POST')
    <input type="text" name="title" value="" placeholder="title">
    <input type="text" name="subtitle" value="" placeholder="subtitle">
    <input type="text" name="description" value="" placeholder="description">
    <input type="text" name="author" value="" placeholder="author">
    <input type="date" name="date" value="" placeholder="date">
    <input type="submit" name="" value="INSERT">
  </form>
</body>
</html>
