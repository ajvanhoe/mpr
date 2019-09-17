      <div class="card-deck">
         
    <div class="card border-dark mb-3" style="min-width: 80%">
          <div class="card-header text-white bg-primary"><strong>Knjige</strong></div>
          <div class="card-body">
          <h5 class="card-title">Nove knjige</h5>
          
          <hr>
          
  @foreach($books as $book)

    <?php 
      $this_book = $book->id; 
      $naslovna = $book->media->shift();
    ?>

    <div class="row">
      <div class="col-lg-4">
      @if($naslovna !== null)
        <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{asset('media/books/'.$naslovna->file)}}">
      @else 
        <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{ asset('images/blank.png') }}">
      @endif  
      </div> 

      <div clas="col-lg-8">
        Knjiga: <a href="{{route('show.book', ['id' => $this_book])}}" target="__blank"><strong>{{$book->title}}</strong></a><br>
        uneta: {{$book->created_at}}<br>
      </div>
    </div>

    <hr>
  @endforeach

          </div> <!-- /.card-body -->

          <div class="card-footer">
            <small class="text-muted"><a href="{{route('show.book')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled knjiga</a></small><br>
            <small class="text-muted"><a href="{{route('create.book')}}">+ dodaj novu knjigu</a></small>
          </div>
    </div> <!-- /.card -->
        

        
    <div class="card border-dark mb-3" style="min-width: 80%">
        <div class="card-header text-white bg-primary"><strong>Stripovi</strong></div>
        <div class="card-body">
        <h5 class="card-title">Novi stripovi</h5>
        
          <hr>
        
  @foreach($comics as $comic)

    <?php 
      $this_comic = $comic->id; 
      $naslovna = $comic->media->shift();
    ?>
            
    <div class="row">
      <div class="col-md-4">
        @if($naslovna !== null)
        <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{asset('media/comics/'.$naslovna->file)}}">
        @else 
        <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{ asset('images/blank.png') }}">
        @endif  
      </div> 
      
      <div clas="col-md-8">
        Strip: <a href="{{route('show.comic', ['id' => $this_comic])}}" target="__blank"><strong>{{$comic->title}}</strong></a><br>
        unet: {{$comic->created_at}}<br>
                
      </div>
    </div>

    <hr>
  @endforeach

      </div> <!-- /.card-body -->

        <div class="card-footer">
          <small class="text-muted"><a href="{{route('show.comic')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled stripova</a></small><br>
          <small class="text-muted"><a href="{{route('create.comic')}}">+ dodaj novi strip</a></small>
        </div>

    </div> <!-- /.card -->
      
        
        </div>


======================================================


        <div class="card-deck">
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Kolekcionarstvo</strong></div>
                
                <div class="card-body">
                <h5 class="card-title">Novi antikviteti</h5>
                <p class="card-text">
                  Poslednji uneti predmeti
                  <hr>
                </p>

          @foreach($items as $item)

              <?php 
          
          $this_item = $item->id; 
          $naslovna = $item->media->shift();
          
          ?>
          
          <div class="row">
            <div class="col-md-4">
              @if($naslovna !== null)
                <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{asset('media/items/'.$naslovna->file)}}">
              @else 
                <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{ asset('images/blank.png') }}">
              @endif  
            
            </div> 
            <div clas="col-md-8">
              Artikl: <a href="{{route('show.item', ['id' => $this_item])}}" target="__blank"><strong>{{$item->title}}</strong></a><br>
              unet: {{$item->created_at}}<br>
              
            </div>
          </div>

          <hr>
          @endforeach

              </div>

              <div class="card-footer">
                <small class="text-muted"><a href="{{route('show.item')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled kolekcionarskih predmeta</a></small><br>
                <small class="text-muted"><a href="{{route('create.item')}}">+ dodaj novi predmet</a></small>
              </div>
            </div>


                <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Albumi</strong></div>
                <div class="card-body">
                <h5 class="card-title">Novi albumi</h5>
                
                  <hr>
                
  @foreach($albums as $album)

    <?php 
      $this_album = $album->id; 
      $naslovna = $album->media->shift();
    ?>
    
      <div class="row">
        <div class="col-md-4">
          @if($naslovna !== null)
            <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{asset('media/albums/'.$naslovna->file)}}">
          @else 
            <img style="width: 75px; height: 50px" class="img-thumbnail" src="{{ asset('images/blank.png') }}">
          @endif  
        </div> 

        <div clas="col-md-8">
          Album: <a href="{{route('show.album', ['id' => $this_album])}}" target="__blank"><strong>{{$album->title}}</strong></a><br>
          unet: {{$album->created_at}}<br>
        </div>
      </div>

          <hr>
  @endforeach
                
              </div> <!-- /.card-body -->

          <div class="card-footer">
            <small class="text-muted"><a href="{{route('show.album')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled albuma</a></small><br>
            <small class="text-muted"><a href="{{route('create.album')}}">+ dodaj novi album</a></small>
          </div>
      </div> <!-- /.card -->
        

    </div>





    =========================================================================================



    !-- 
    <!-- <div class="row"> -->
        <div class="card-deck">
        <!-- <div class="col-md-4"> -->
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Knjige</strong></div>
                <div class="card-body">
                <h5 class="card-title">Nove knjige</h5>
                <p class="card-text">
                    Poslednjih 15 unetih knjiga  
                  <hr>
                
                </p>
                </div>

              <div class="card-footer">
                    <small class="text-muted"><a href="{{route('show.book')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled knjiga</a></small><br>
            <small class="text-muted"><a href="{{route('create.book')}}">+ dodaj novu knjigu</a></small>
              </div>
            </div>
        <!-- </div> -->

        <!-- <div class="col-md-4"> -->
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Stripovi</strong></div>
                <div class="card-body">
                <h5 class="card-title">Novi stripovi</h5>
                <p class="card-text">
                 
                </p>
                </div>

              <div class="card-footer">
                 <small class="text-muted"><a href="{{route('show.comic')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled stripova</a></small><br>
                <small class="text-muted"><a href="{{route('create.comic')}}">+ dodaj novi strip</a></small>
              </div>

            </div>
        <!-- </div> -->

        <!-- <div class="col-md-4"> -->
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Albumi</strong></div>
                <div class="card-body">
                <h5 class="card-title">Novi albumi</h5>
                <p class="card-text">
                 
                </p>
              </div>

              <div class="card-footer">
            
              </div>
            </div>
        <!-- </div> -->
        </div>
    <!-- </div> --> -->