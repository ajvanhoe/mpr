@extends('layouts.master')

@section('content')

    <!-- Carousel -->
    @include('partials.carousel-front')


    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">Mala prodavnica retkosti - internet antikvarnica</h1>


      <!-- Marketing Icons Section -->

      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Knjige</h4>
            <div class="card-body">
              <p class="card-text">
                - spisak kategorija - 
                - spisak kategorija - 
                - spisak kategorija - 
              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Pregled knjiga</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Stripovi</h4>
            <div class="card-body">
              <p class="card-text">
                - spisak kategorija - 
                - spisak kategorija - 
                - spisak kategorija - 
              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Pregled stripova</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header">Albumi</h4>
            <div class="card-body">
              <p class="card-text">
                - spisak kategorija - 
                - spisak kategorija - 
                - spisak kategorija - 
              </p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Pregled albuma</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    <!-- ************************************************ -->

      <!-- Portfolio Section -->
      <h2>Kolekcionarstvo</h2>

      <div class="row">

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project One</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Two</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Three</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos quisquam, error quod sed cumque, odio distinctio velit nostrum temporibus necessitatibus et facere atque iure perspiciatis mollitia recusandae vero vel quam!</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Four</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Five</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#">Project Six</a>
              </h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque earum nostrum suscipit ducimus nihil provident, perferendis rem illo, voluptate atque, sit eius in voluptates, nemo repellat fugiat excepturi! Nemo, esse.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Kontakt-front -->
      @include('partials.kontakt-front')

    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('partials.footer')
    
@endsection