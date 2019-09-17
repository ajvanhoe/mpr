@extends('layouts.admin')

@section('content')

<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('dashboard')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Kategorije</li>
  </ol>

<div class="container">

    <div class="row justify-content-center mb-1">
        @include('partials.messages')
    </div>

    <div class="row">
        <div class="card-deck">
        <!-- <div class="col-md-4"> -->
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Knjige</strong></div>
                <div class="card-body">
                <h5 class="card-title">Kategorije</h5>
                <p class="card-text">
                  Sve pripadajuće kategorije i podkategorije
                  <hr>
                  @include('partials.dashboard-book-categories-list')
                </p>
                </div>

              <div class="card-footer">
                  <small class="text-muted"><a href="{{route('show.category.book')}}">+ dodaj novu kategoriju za knjige</a></small>
              </div>
            </div>
        <!-- </div> -->

        <!-- <div class="col-md-4"> -->
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Stripovi</strong></div>
                <div class="card-body">
                <h5 class="card-title">Kategorije</h5>
                <p class="card-text">
                  Sve pripadajuće kategorije i podkategorije
                  <hr>
                  @include('partials.dashboard-comic-categories-list')
                </p>
                </div>

              <div class="card-footer">
                  <small class="text-muted"><a href="{{route('show.category.comic')}}">+ dodaj novu kategoriju za stripove</a></small>
              </div>

            </div>
        <!-- </div> -->

        <!-- <div class="col-md-4"> -->
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Albumi</strong></div>
                <div class="card-body">
                <h5 class="card-title">Kategorije</h5>
                <p class="card-text">
                  Sve pripadajuće kategorije i podkategorije
                  <hr>
                  @include('partials.dashboard-album-categories-list')
                </p>
              </div>

              <div class="card-footer">
                  <small class="text-muted"><a href="{{route('show.category.album')}}">+ dodaj novu kategoriju za albume</a></small>
              </div>
            </div>
        <!-- </div> -->
        </div>
    </div>

    <div class="row">

        <div class="col-md-8">
            <div class="card border-dark mb-3">
                <div class="card-header text-white bg-primary"><strong>Kolekcionarstvo</strong></div>
                
                <div class="card-body">
                <h5 class="card-title">Kategorije</h5>
                <p class="card-text">
                  Sve pripadajuće kategorije i podkategorije
                  <hr>
                  @include('partials.dashboard-item-categories-list')
                </p>
              </div>

              <div class="card-footer">
                  <small class="text-muted"><a href="{{route('show.category.item')}}">+ dodaj novu kategoriju za antikvarnicu</a></small>
              </div>
            </div>
        </div>

    </div>


</div>
@endsection
