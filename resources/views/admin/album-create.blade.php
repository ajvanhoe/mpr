@extends('layouts.admin')

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
                <i class="fa fa-th"></i>  Albumi
            </li>
            
            <li class="active">
                <i class="fa fa-plus-circle"></i> Novi album
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
	        <div class="panel-heading"><strong>Dodaj novi album</strong></div>

	        <div class="panel-body">
	             <div class="col-lg-8">
					 
<form method="POST" action="{{route('store.album')}}" role="form" id="create">
	
	<br>
  <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" form="create">
    <p class="help-block"><em><small>naziv albuma</small></em></p>
  </div>

		
	<hr><br>
  
  <div class="form-group">
		  <select name="type" class="form-control col-md-8" form="create">
		  
				<option value="" selected>odaberite tip...</option>
				
				<option value="Popunjen" style="font-size: 10px;">
					Popunjeni
				</option>
				
				<option value="Prazan" style="font-size: 10px;">
					Prazan
				</option>
				
				<option value="Za popunjavanje" style="font-size: 10px;">
					Za popunjavanje
				</option>
				
				<option value="Slabo popunjen" style="font-size: 10px;">
					Slabo popunjen
				</option>
					
				<option value="Materijali" style="font-size: 10px;">
					Materijali
				</option>
				
				<option value="Kesice" style="font-size: 10px;">
					Kesice
				</option>
				
				<option value="Sličice" style="font-size: 10px;">
					Sličice
				</option>
		   </select>
		<p class="help-block"><em><small>tip</small></em></p>
   </div>
   

   
   <div class="form-group">
		<select name="category" class="form-control col-md-8" form="create">
			<option value="" selected>žanr albuma...</option>
			   @foreach($categories as $category)
			   			<option value="{{$category->title}}" style="font-size: 10px;">
								{{$category->title}}
						</option>
			   @endforeach
   		</select>
   		<p class="help-block"><em><small>žanr</small></em></p>
   	</div>
   
        <!-- obavezno -->
    {{ csrf_field() }}  
	<hr>
	<br>
	<button type="submit" class="btn btn-lg btn-primary">Dalje...</button>&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="reset" class="btn btn-danger">Reset</button>    	
    
	

</form>
                        
								
						<hr>
								
						<h5><a href="{{route('admin.index.albuma')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled albuma</a></h5>				
						
				</div> <!-- /.col-lg-8 -->
            </div> <!-- /.panel-body -->
              
        </div> <!-- /.panel-primary -->
    </div> <!-- /.col-lg-8 col-lg-offset-1 -->
</div> <!-- /.row -->



<div class="row">
    <div class="col-lg-12">
        <hr>

        <h5><a href="{{ route('dashboard') }}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>

        
    </div>
</div>


	
	

@endsection

