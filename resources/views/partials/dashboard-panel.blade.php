<div class="card-deck" style="width:100%">
  <!-- Knjige -->
  <div class="card border-dark mb-3">
    <div class="card-header text-white bg-primary"><strong>Knjige</strong></div>
    <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
    <div class="card-body">
      <h6 class="card-title">Nove knjige</h6>
     
  @foreach($books as $book)
   <hr>
    <?php 
      $this_book = $book->id; 
      $naslovna = $book->media->shift();
    ?>
      <p class="card-text">
  @if($naslovna !== null)
  <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{asset('media/books/'.$naslovna->file)}}">
  @else 
    <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{ asset('images/blank.png') }}">
  @endif  
     <a href="{{route('show.book', ['id' => $this_book])}}" target="__blank"><strong>{{$book->title}}</strong></a><br><span class="text-muted">uneto:  {{$book->created_at}}</span>
      </p>
     
  @endforeach


    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="{{route('show.book')}}">pregled knjiga</a> / <a href="{{route('create.book')}}">dodaj novu knjigu</a></small>
    </div>
  </div>

  <!-- Stripovi -->
  <div class="card border-dark mb-3">
    <div class="card-header text-white bg-primary"><strong>Stripovi</strong></div>
    <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
    <div class="card-body">
      <h6 class="card-title">Novi stripovi</h6>
      

  @foreach($comics as $comic)
   <hr>
    <?php 
      $this_comic = $comic->id; 
      $naslovna = $comic->media->shift();
    ?>
      <p class="card-text">
  @if($naslovna !== null)
  <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{asset('media/comics/'.$naslovna->file)}}">
  @else 
    <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{ asset('images/blank.png') }}">
  @endif  
     <a href="{{route('show.comic', ['id' => $this_comic])}}" target="__blank"><strong>{{$comic->title}}</strong></a><br><span class="text-muted">uneto:  {{$comic->created_at}}</span>
      </p>
     
  @endforeach


    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="{{route('show.comic')}}">pregled stripova</a> / <a href="{{route('create.comic')}}">dodaj novi strip</a></small>
    </div>
  </div>
  <!-- Albumi -->
  <div class="card border-dark mb-3">
    <div class="card-header text-white bg-primary"><strong>Albumi</strong></div>
    <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
    <div class="card-body">
      <h6 class="card-title">Novi albumi</h6>
      

  @foreach($albums as $album)
  <hr>
    <?php 
      $this_album = $album->id; 
      $naslovna = $album->media->shift();
    ?>
    <p class="card-text">
    @if($naslovna !== null)
    <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{asset('media/albums/'.$naslovna->file)}}">
    @else 
      <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{ asset('images/blank.png') }}">
    @endif  
    <a href="{{route('show.album', ['id' => $this_album])}}" target="__blank"><strong>{{$album->title}}</strong></a><br><span class="text-muted">uneto:  {{$album->created_at}}</span>
    </p>
   
    @endforeach





    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="{{route('show.album')}}">pregled albuma</a> / <a href="{{route('create.album')}}">dodaj novi album</a></small>
    </div>
  </div>
</div>