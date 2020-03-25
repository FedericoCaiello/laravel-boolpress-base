
  <h1>inserisci un giornale</h1>
  {{-- Stampa un errore se non inseriamo dei dati che non rispettino i criteri --}}
 @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
       @foreach ($errors->all() as $error)
           <li>{{ $error }}</li>
       @endforeach
      </ul>
  </div>
 @endif
  <form action=" {{(!empty($post)) ? route('posts.update', $post->id) : route('posts.store')}}" method='post'>
      {{-- è importante che questi token siano dentro il form --}}
      @csrf
      @if(!empty($post))
       @method('PATCH')
       @else
       @method('POST')
      @endif
      <div class="">
        <input type="text" name="title" value="{{(!empty($post)) ? $post->title : ''}}" placeholder="title">
      </div>
      <div class="">
        <input type="text" name="subtitle" value="{{(!empty($post)) ? $post->subtitle : ''}}" placeholder="subtitle">
      </div>
      <div class="">
        <input type="text" name="description" value="{{(!empty($post)) ? $post->description : ''}}" placeholder="description">
      </div>
      <div class="">
        <input type="text" name="author" value="{{(!empty($post)) ? $post->author : ''}}" placeholder="author">
      </div>
      <div class="">
        <input type="text" name="date" value="{{(!empty($post)) ? $post->date : ''}}" placeholder="date">
      </div>
      @if(!empty($post))
      <input type="hidden" name="id" value="{{$post->id}}">
      @endif
      <button type="submit" name="button">
          Save
      </button>
  </form>
