@extends('layouts.master')


@section('styles')
<!-- <link href="{{asset('css/custom.css')}}" rel="stylesheet"> -->

<link rel="stylesheet" href="{{asset('vendor/fancybox/jquery.fancybox.css')}}" type="text/css" media="screen">
@endsection



@section('content')

      <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">{{ $resource->title }}
        <!-- <small>Subheading</small> -->
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="{{route('frontpage')}}">Antikvarnica</a>
        </li>
        <li class="breadcrumb-item active">{{ ucfirst($type) }}</li>
      </ol>

      <!-- Portfolio Item Row -->
      <div class="row">

        <?php  
          $naslovna = $resource->media->shift();  
          $slike = $resource->media;
        ?>

        <div class="col-md-8">
          <!-- <img class="img-fluid" src="http://placehold.it/750x500" alt="pic"> -->

@if($naslovna !== null)
<a class="fancybox" rel="group" href="{{asset('/media/'.$entype.'s/'.$naslovna->file)}}" title="{{$resource->title}}">
<img  class="img-fluid" style="width:750px; height:500px;" src="{{asset('/media/'.$entype.'s/'.$naslovna->file)}}" title="{{$resource->title}}"></a>
@else  
<img class="img-fluid" style="width:750px; height:500px;" src="{{ asset('/images/blank.png') }}" title="{{$resource->title}}"> 
@endif  
        </div>

        <div class="col-md-4">
          <h3 class="my-2">{{ $resource->title }}</h3>
          <table class="table table-striped table-borderless">
            <!-- <tbody><tr><td> --><p>{{ $resource->description }}</p>
            <!-- </td></tr></tbody> -->
          <hr>

          <h5 class="my-3">Detalji</h5>

                <table class="table table-striped table-borderless" >
                  <tbody>
                  
                  @if(isset($resource->author))
                    <tr>
                      <td style="width:15%">Autor:</td>
                      <td colspan="2">{{ $resource->author }}</td>
                    </tr>
                  @endif

                  @if(isset($resource->publisher))
                   <tr>
                    <td style="width:15%">Izdavač:</td>
                    <td colspan="2">{{ $resource->publisher }}</td>
                  </tr>
                  @endif

                  @if(isset($resource->press))
                    <tr>
                      <td style="width:15%">Štamparija:</td>
                      <td colspan="2">{{ $resource->press }}</td>
                    </tr>
                  @endif

                  @if(isset($resource->edition))
                    <tr>
                      <td style="width:15%">Tiraž:</td>
                      <td colspan="2">{{ $resource->edition }}</td>
                    </tr>
                  @endif

                  <tr>
                    <td style="width:15%">Cena:</td>
                    <td colspan="2"><strong>{{ $resource->price }}</strong></td>
                  </tr>

                  </tbody>
                </table>
        </div>
      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h5 class="my-4">Slike</h5>
      <hr>
      <div class="row">
       @foreach($slike as $slika)
        <!-- <div class="col-md-3 col-sm-6 mb-2"> -->
        <a class="fancybox" rel="group" href="{{asset('/media/'.$entype.'s/'.$slika->file)}}" title="{{$resource->title}}">
         <img class="img-thumbnail" style="width:300px; height:250px;" src="{{asset('/media/'.$entype.'s/'.$slika->file)}}" alt="pic">
          </a>
        <!-- </div> -->
       @endforeach
<!-- 
  
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>
 -->
<!--     <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="#">
            <img class="img-fluid" src="http://placehold.it/500x300" alt="">
          </a>
        </div> -->

      </div>
      <!-- /.row -->
      <hr>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    @include('partials.footer')

@endsection


@section('scripts')

<script type="text/javascript" src="{{asset('vendor/fancybox/jquery.fancybox.pack.js')}}"></script>

  <script type="text/javascript">
  $(document).ready(function() {
    $(".fancybox").fancybox();
  });
  </script>

<!-- Add jQuery library -->
<!-- <script type="text/javascript" src="{{asset('vendor/fancybox/jquery.script.js')}}"></script> -->


@endsection
