<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            {{ config('app.name', 'MPR') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="nav-item"><a class="nav-link" href="{{route('public.index.albuma')}}">Albumi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('public.index.knjiga')}}">Knjige</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('public.index.stripova')}}">Stripovi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('kontakt')}}">Kontakt</a></li>
                
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <form method="POST" class="form-inline mt-2 mt-md-0" action="{{route('public.search')}}">
                <input class="form-control mr-sm-2" name="string" type="text" placeholder="Pretraga" aria-label="Search">
                {{ csrf_field() }}
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pretraga</button>
                </form>
            </ul>
        </div>
    </div>
</nav>