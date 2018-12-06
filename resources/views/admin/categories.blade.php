@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Sve kategorije</h3>

        <ol class="breadcrumb" style="text-align:center;">
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>  Naslovna</a>
            </li>
            
            <li class="active">
                <i class="fa fa-edit"></i> Pregled kategorija
            </li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div> <!-- /.row -->


<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        @include('partials.messages')
    </div>
</div>



<div class="row">

	<div class="col-lg-4">
		<div class="panel panel-primary">
	        <div class="panel-heading">
	            <strong>Albumi</strong>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	
	        	@foreach($album_categories as $album_category)

	        		<a href="{{route('index.album.subcategory', ['category' => $album_category->id])}}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$album_category->title}}</h4>
                        <p class="list-group-item-text">{{$album_category->description}}</p>
   					</a>

	        	@endforeach

	        	<hr>
	        	<h5><a href="{{route('albumi.index.kategorija')}}"><small><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Dodaj novu kategoriju</small></a></h5>
	        </div>
	    </div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-green">
	        <div class="panel-heading">
	            <strong>Knjige</strong>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	@foreach($book_categories as $book_category)

	        		<a href="{{route('index.knjiga.subcategory', ['category' => $book_category->id])}}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$book_category->title}}</h4>
                        <p class="list-group-item-text">{{$book_category->description}}</p>
   					</a>

	        	@endforeach

	        	<hr>
	        	<h5><a href="{{route('knjige.index.kategorija')}}"><small><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Dodaj novu kategoriju</small></a></h5>

	        </div>
	    </div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-yellow">
	        <div class="panel-heading">
	            <strong>Stripovi</strong>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	@foreach($comic_categories as $comic_category)

	        		<a href="{{route('index.strip.subcategory', ['category' => $comic_category->id])}}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$comic_category->title}}</h4>
                        <p class="list-group-item-text">{{$comic_category->description}}</p>
   					</a>

	        	@endforeach

	        	<hr>
	        	<h5><a href="{{route('stripovi.index.kategorija')}}"><small><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Dodaj novu kategoriju</small></a></h5>
	        </div>
	    </div>
	</div>
	        	
    	

    	
                
    </div>
    <!-- /.row -->

@endsection
