<!-- Authentication Links -->
@guest
    <li class="nav-item">
        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
    <li class="nav-item">
        @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        @endif
    </li>
@else
    <li class="nav-item dropdown">
        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

            <a class="dropdown-item" href="{{ url('/home') }}">&nbsp;<i class="fa fa-home"></i>&nbsp;&nbsp;Dashboard</a>
            <!-- <a class="dropdown-item" href="#"><i class="fa fa-user fa-fw"></i>&nbsp;&nbsp;Profile</a> -->
            <a class="dropdown-item" href="{{ url('/settings') }}"><i class="fa fa-gear fa-fw"></i>&nbsp;&nbsp;Settings</a>
            <a class="dropdown-item"><hr></a>


            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
              <i class="fa fa-sign-out fa-fw"></i>&nbsp;&nbsp;{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </li>
@endguest