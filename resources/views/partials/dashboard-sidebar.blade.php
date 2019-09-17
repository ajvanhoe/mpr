 <!-- Sidebar -->
<ul class="sidebar navbar-nav">

  <li class="nav-item active">
    <a class="nav-link" href="{{route('dashboard')}}">
      <!-- <i class="fas fa-fw fa-tachometer-alt"></i> -->
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item">
    <a class="nav-link" href="{{route('categories')}}">
      <span>Kategorije</span></a>
  </li>



  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <!-- <i class="fas fa-fw fa-folder"></i> -->
    <span>Knjige</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Knjige:</h6>
      <a class="dropdown-item" href="{{route('show.book')}}">Pregled</a>
      <a class="dropdown-item" href="{{route('create.book')}}">+ dodaj novu knjigu</a>
      
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Kategorije:</h6>
       <a class="dropdown-item" href="{{route('show.category.book')}}">+ dodaj</a>
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <!-- <i class="fas fa-fw fa-folder"></i> -->
    <span>Stripovi</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Stripovi:</h6>
      <a class="dropdown-item" href="{{route('show.comic')}}">Pregled</a>
      <a class="dropdown-item" href="{{route('create.comic')}}">+ dodaj novi strip</a>
      
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Kategorije:</h6>
        <a class="dropdown-item" href="{{route('show.category.comic')}}">+ dodaj</a>
    </div>
  </li>


  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <!-- <i class="fas fa-fw fa-folder"></i> -->
    <span>Albumi</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Albumi:</h6>
      <a class="dropdown-item" href="{{route('show.album')}}">Pregled</a>
      <a class="dropdown-item" href="{{route('create.album')}}">+ dodaj novi album</a>
      
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Kategorije:</h6>
        <a class="dropdown-item" href="{{route('show.category.album')}}">+ dodaj</a>
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <i class="fas fa-fw fa-folder"></i>
    <span>Antikvarnica</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Antikviteti:</h6>
      <a class="dropdown-item" href="{{route('show.item')}}">Pregled</a>
      <a class="dropdown-item" href="{{route('create.item')}}">+ dodaj novi predmet</a>
      
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Kategorije:</h6>
       <a class="dropdown-item" href="{{route('show.category.item')}}">+ dodaj</a>
    </div>
  </li>


<!-- 
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Pages</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Login Screens:</h6>
      <a class="dropdown-item" href="login.html">Login</a>
      <a class="dropdown-item" href="register.html">Register</a>
      <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Other Pages:</h6>
      <a class="dropdown-item" href="404.html">404 Page</a>
      <a class="dropdown-item" href="blank.html">Blank Page</a>
    </div>
  </li>
 -->

  <!-- <li class="nav-item">
    <a class="nav-link" href="charts.html">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>Charts</span></a>
  </li>


  <li class="nav-item">
    <a class="nav-link" href="tables.html">
      <i class="fas fa-fw fa-table"></i>
      <span>Tables</span></a>
  </li> -->


</ul>