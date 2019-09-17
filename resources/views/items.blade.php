@extends('layouts.master')

@section('content')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{ ucfirst($type) }}
        <!-- <small>Subheading</small> -->
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('frontpage')}}">Antikvarinca</a>
        </li>
        <li class="breadcrumb-item active">{{ ucfirst($type) }}</li>
      </ol>

      @foreach($resources as $resource)

        <?php  
          $this_resource = $resource->id;
          $naslovna = $resource->media->shift();  
        ?>

      <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="{{route('public.show', ['type' => $type, 'id' => $this_resource])}}">
         
@if($naslovna !== null)
<img  class="img-fluid rounded mb-3 mb-md-0" style="width:700px; height:300px;" src="{{asset('/media/'.$entype.'s/'.$naslovna->file)}}" title="{{$resource->title}}">
@else 
<img class="img-fluid rounded mb-3 mb-md-0" style="width:700px; height:300px;" src="{{ asset('/images/blank.png') }}" title="{{$resource->title}}">
@endif  
          </a>
        </div>
        <div class="col-md-5">
          <h3>{{$resource->title}}</h3>
          <p>{{$resource->description}}</p>
          <p>Cena: {{$resource->price}}</p>
          <a class="btn btn-primary" href="{{route('public.show', ['type' => $type, 'id' => $this_resource])}}">Pregled
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>
      @endforeach

    

      <!-- Project Two -->
<!--       <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Project Two</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, odit velit cumque vero doloremque repellendus distinctio maiores rem expedita a nam vitae modi quidem similique ducimus! Velit, esse totam tempore.</p>
          <a class="btn btn-primary" href="#">View Project
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div> -->
      <!-- /.row -->
<!-- 
      <hr> -->

   

      <hr>

      <!-- Pagination -->

      {{ $resources->links() }}

      <!-- <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul> -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('partials.footer')

@endsection

@section('scripts')
@endsection

