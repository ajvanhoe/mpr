
<!-- Navigation -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">

    <a class="navbar-brand" href="{{route('frontpage')}}">Mala prodavnica retkosti</a>

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item">
              <a class="nav-link" href="{{route('frontpage')}}">Naslovna</a>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Knjige
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
               <a class="dropdown-item" href="{{route('index', ['type' => 'knjige'])}}"> Knjige</a>
                <hr>
               @foreach($book_categories as $category)
                <a class="dropdown-item" href="{{route('search.category', ['type' => 'book', 'category' => $category->title])}}">{{$category->title}}</a>
               @endforeach
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Stripovi
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
               <a class="dropdown-item" href="{{route('index', ['type' => 'stripovi'])}}"> Stripovi</a>
               <hr>
               @foreach($comic_categories as $category)
                <a class="dropdown-item" href="{{route('search.category', ['type' => 'comic', 'category' => $category->title])}}">{{$category->title}}</a>
               @endforeach
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Albumi
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{route('index', ['type' => 'albumi'])}}"> Albumi</a>
                <hr>
                @foreach($album_categories as $category)
                  <a class="dropdown-item" href="{{route('search.category', ['type' => 'album', 'category' => $category->title])}}">{{$category->title}}</a>
                @endforeach
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Antikvarnica
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="{{route('index', ['type' => 'antikvarije'])}}"> Antikvarnica</a>
                <hr>
               @foreach($categories as $category)
                <a class="dropdown-item" href="{{route('search.category', ['type' => 'item', 'category' => $category->title])}}">{{$category->title}}</a>
               @endforeach
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}">Kontakt</a>
            </li>

          </ul>
        </div>  <!-- /.navbar-collapse -->

  </div> <!-- /.container -->
</nav>