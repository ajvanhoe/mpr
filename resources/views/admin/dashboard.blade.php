@extends('layouts.admin')

@section('content')

<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('dashboard')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Naslovna</li>
  </ol>


<div class="container">

    <div class="row justify-content-center mb-1">
        @include('partials.messages')
    </div>

    <div class="row">
    @include('partials.dashboard-panel')
    </div>

    <div class="row">
    <div class="col-md-8">    
          
  <!-- Kolekcionarstvo -->
  <div class="card border-dark mb-3">
    <div class="card-header text-white bg-primary"><strong>Kolekcionarstvo</strong></div>
    
    <div class="card-body">
      <h6 class="card-title">Novi unosi</h6>
      

  @foreach($items as $item)
  <hr>
    <?php 
      $this_item = $item->id; 
      $naslovna = $item->media->shift();
    ?>
    <p class="card-text">
    @if($naslovna !== null)
    <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{asset('media/items/'.$naslovna->file)}}">
    @else 
      <img style="width: 75px; height: 50px" class="img-thumbnail mr-2" src="{{ asset('images/blank.png') }}">
    @endif  
    <a href="{{route('show.item', ['id' => $this_item])}}" target="__blank"><strong>{{$item->title}}</strong></a><br><span class="text-muted">uneto:  {{$item->created_at}}</span>
    </p>
   
    @endforeach



    </div>
    <div class="card-footer">
      <small class="text-muted"><a href="{{route('show.item')}}">pregled unosa</a> / <a href="{{route('create.item')}}">dodaj novi unos</a></small>
    </div>
  </div>



    </div>
    </div>


</div>
@endsection
