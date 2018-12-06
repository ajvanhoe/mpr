@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
    
     <hr>

        <ol class="breadcrumb" style="text-align:center;">
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>  Naslovna</a>
            </li>

            <li>
                <i class="fa fa-th"></i>  Stripovi
            </li>
            
            <li class="active">
                <i class="fa fa-plus-circle"></i> Novi strip
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
	        <div class="panel-heading"><strong>Dodaj novi strip</strong></div>

	        <div class="panel-body">
	             <div class="col-lg-8">
					 
<form method="POST" action="{{route('store.strip')}}" role="form" id="create">
	
	<br>
  <div class="form-group">
    <input type="text" class="form-control" id="title" name="title" form="create">
    <p class="help-block"><em><small>naziv stripa</small></em></p>
  </div>

		
	<hr><br>
  
  <div class="form-group">
	<input type="text" class="form-control" id="author" name="author" form="create">	  
	<p class="help-block"><em><small>Autor</small></em></p>
  </div>
      
   <div class="form-group">
		<select name="category" class="form-control col-md-8" form="create">
			<option value="" selected>žanr stripa...</option>
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
								
						<h5><a href="{{route('admin.index.stripova')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;pregled stripova</a></h5>				
						
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

