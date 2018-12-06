@extends('layouts.admin')

@section('styles')
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" type="text/css"> -->
<link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" type="text/css">
@endsection('styles')

@section('content')

<div class="row">
    <div class="col-lg-12">
     <!--    <h3 class="page-header">Novi album</h3> -->
     <hr>
        <ol class="breadcrumb" style="text-align:center;">
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>  Naslovna</a>
            </li>

            <li>
                <i class="fa fa-dashboard"></i>  Albumi
            </li>
            
            <li>
                <i class="fa fa-plus-circle"></i>  Novi album
            </li>

            <li class="active">
                <i class="fa fa-edit"></i> Dodaj slike
            </li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div> <!-- /.row -->


<div class="row">
    <div class="col-lg-8 col-lg-offset-1">
        @include('partials.messages')
    </div>
</div>




<div class="row">
	<div class="col-lg-8 col-lg-offset-1">
			
	    <div class="panel panel-primary">
	        <div class="panel-heading"><strong>Dodaj detalje</strong></div>

	        <div class="panel-body">

                	<div class="row">
                     <div class="col-lg-10">

                     	<h4><strong>Album:</strong> {{$album->title}}</h4>
                     	<p>Žanr: {{$album->category}}</p>
                     	<p>Tip: {{$album->type}}</p>

                    	<hr>

					<h3>Dodaj slike</h3>
   		<div>
	   		<form action="{{route('store.album.media', ['id' => $album->id])}}" class="dropzone" id="my-awesome-dropzone">{{ csrf_field()}}</form>
	   		<p class="help-block"><em>maksimalna veličina pojedinačnog fajla: 1mb</em></p>
   		</div>

   					 </div>
   					</div>	

   					<hr>

			<div class="row">
         		<div class="col-lg-8">

   					<h3>Ostali podaci</h3>
       
   					<form method="POST" action="{{route('update.album', ['id' => $album->id])}}" role="form" id="details" enctype="multipart/form-data">


   		<!-- Izdavac -->				
	<div class="form-group">
		<input type="text" class="form-control" name="publisher" form="details">
		<p class="help-block"><em><small>izdavač</small></em></p>
	</div>
		<!-- Godina -->
	<div class="form-group">
		<input type="number" min="" max="" class="form-control col-md-6" name="year" form="details">
		<p class="help-block"><em><small>godina</small></em></p>
	</div>
	
		<!-- Tiraz -->
	<div class="form-group">
		<input type="number" min="1" max="10000000" class="form-control col-md-6" name="edition" form="details">
		<p class="help-block"><em><small>tiraž</small></em></p>
	</div>
	
	<hr>

		<!-- Opis -->
	<div class="form-group">
		<textarea class="form-control" rows="3" name="description" form="details"></textarea> 

		<p class="help-block"><em><small>opis</small></em></p>
	</div>


	<!-- Dodati podkategoriju! -->

	<div class="form-group">
		<select name="subcategory" class="form-control col-md-10" form="details">
			<option value="none" selected><em>odaberite kategoriju...</em></option>
			@foreach($subcategories as $subcategory)			

				<option value="{{$subcategory->title}}" style="font-size: 10px;">
					{{$subcategory->title}}
				</option>

			@endforeach
		</select>
		<p class="help-block"><em><small>Kategorija</small></em></p>
   	</div>
  
  
  	<!-- Cena -->
	
	<div class="form-group">
		<input type="number" min="1" max="100000000" class="form-control col-md-6" name="price" form="details">
		<p class="help-block"><em><small>cena</small></em></p>
	</div>

				<hr>
			
					 {{ csrf_field() }}  
					<button type="submit" class="btn btn-lg btn-primary"> <i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Dodaj</button>

				</div>
   			</div>	

   					</form>

					<hr>
								
					<h5><a href="{{ route('admin.index.albuma') }}"><i class="fa fa-arrow-circle-right"></i> nazad...</a></h5>
						
					</div> <!-- /.LG-8 -->
				   </div> <!-- /. ROW -->
                </div>
                    
            </div>
        </div>
    </div>


@endsection



@section('scripts')
 <!-- UPLOAD IMAGE-->
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script> -->
<script src="{{ asset('js/dropzone.min.js') }}"></script>
@endsection('scripts')