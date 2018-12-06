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
                <i class="fa fa-dashboard"></i>  Knjige
            </li>
            
            <li class="active">
                <i class="fa fa-edit"></i> Edit
            </li>
        </ol>
    </div>
    <!-- /.col-lg-12 -->
</div> <!-- /.row -->


<div class="row">
    <div class="col-lg-10 col-lg-offset-1">
    	 @include('partials.messages')
    </div>
</div>



    <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-primary">
			
                <div class="panel-heading">
					<br><h2><strong>{{$knjiga->title}}</strong></h2>
				</div>

                <div class="panel-body">
  			 
<form method="POST" action="{{route('update.knjiga', ['id' => $knjiga->id])}}" role="form" id="create" enctype="multipart/form-data">
	
	<br>
  <div class="form-group">
    <input type="text" class="form-control" name="title" form="create" value="{{$knjiga->title}}">
    <p class="help-block"><em><small>naziv knjige</small></em></p>
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="author" form="create" value="{{$knjiga->author}}">
    <p class="help-block"><em><small>autor</small></em></p>
  </div>

	<hr><br>
	
	<div class="form-group">
		<input type="text" class="form-control" name="publisher" form="create" value="{{$knjiga->publisher}}">
		<p class="help-block"><em><small>izdavač</small></em></p>
	</div>

	<div class="form-group">
		<input type="number" min="" class="form-control col-md-6"  name="year" form="create" value="{{$knjiga->godina}}">
		<p class="help-block"><em><small>godina</small></em></p>
	</div>

	<div class="form-group">
		<input type="number" min="1" class="form-control col-md-6" name="edition" form="create" value="{{$knjiga->edition}}">
		<p class="help-block"><em><small>tiraž</small></em></p>
	</div>

	<hr><br>

	<div class="form-group col-md-4">
		<input type="text" class="form-control" name="code" form="create" value="{{$knjiga->code}}">
		<p class="help-block"><em><small>šifra</small></em></p>
	</div>
	
	<div class="form-group">
		 <textarea class="form-control" rows="4" name="details" form="create" >{{$knjiga->description}}</textarea> 
	
		<p class="help-block"><em><small>opis</small></em></p>
	</div>
	
	
	<div class="form-group">
		<input type="number" min="1" class="form-control col-md-6" id="cena" name="price" form="create" value="{{$knjiga->price}}">
		<p class="help-block"><em><small>cena</small></em></p>
	</div>
	
	<hr><br>
     
   
    <div class="form-group">
	   <select name="category" class="form-control col-md-8" form="create">
            @if($knjiga->category)
             <option value="{{$knjiga->category}}">{{$knjiga->category}}</option>
            @else
             <option value="nedefinisano">---</option>
            @endif

	   	@foreach($categories as $category)
	   		<option value="{{$category->title}}">{{$category->title}}</option>
	   	@endforeach

	    </select>
	 	<p class="help-block"><em><small>žanr</small></em></p>
   </div>
  
 
    <div class="form-group">
		  <select name="subcategory" class="form-control col-md-10" form="create">

		   @if($subcategories)
		  	@foreach($subcategories as $subcategory)
		  		<option value="{{ $subcategory->id }}" style="font-size: 10px;">{{ $subcategory->title }}</option>
		  	@endforeach
		  @else
		  	<option value="none" style="font-size: 10px;">nema</option>	
		  @endif
		  

		   </select>
		<p class="help-block"><em><small>Kategorija</small></em></p>
   </div>

    <!-- obavezno -->
    {{ csrf_field() }}  
	<hr>
	<br>
    <button type="submit" class="btn btn-primary">Izmeni</button>&nbsp;&nbsp;&nbsp;    
	<!-- <button type="reset" class="btn btn-danger">Reset</button> -->	
	
	
</form>
                        
	<hr>
	<h5><a href="{{route('admin.index.knjiga')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>
						
                            
                </div>
                    
            </div>
        </div>
    </div> <!-- /.row -->



<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-primary">
		
            <div class="panel-heading">
				<br><h2>Slike</h2>
			</div>

            <div class="panel-body">

            	<h4>Obriši sliku</h4>
	            	<hr>
            	<div class="row">
	            	
				@foreach($slike as $slika)

				<div class="col-lg-2">
				
					<!-- <img style="width: 150px; height: 100px" class="img-thumbnail" src="/media/knjige/{{$slika->file}}"><br> -->
					<img style="width: 150px; height: 100px" class="img-thumbnail" src="{{asset('media/knjige/'.$slika->file)}}"><br>
				<a href="{{route('delete.knjiga.media', ['id' => $slika->id])}}" onclick="confirm('ukloni?')">delete</a>
				</div>
				@endforeach
				</div>
				<hr>

				<h4>Dodaj slike</h4>

				<hr>

				<div>
			   		<form action="{{route('store.knjiga.media', ['id' => $knjiga->id])}}" class="dropzone" id="my-awesome-dropzone">{{ csrf_field()}}</form>
			   		<p class="help-block"><em>maksimalna veličina pojedinačnog fajla: 1mb</em></p>
   				</div>


			</div>

		</div>


@endsection



@section('scripts')
 <!-- UPLOAD IMAGE-->
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script> -->
<script src="{{ asset('js/dropzone.min.js') }}"></script>
@endsection('scripts')