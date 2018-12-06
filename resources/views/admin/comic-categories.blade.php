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


	<div class="col-lg-6 col-lg-offset-1">
		<div class="panel panel-primary">
	        <div class="panel-heading">
	            <strong>Pregled žanrova</strong>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        
                <div class="list-group">
                    @foreach($categories as $category)
                <a href="{{route('index.strip.subcategory', ['id' => $category->id])}}" class="list-group-item">
                        <h4 class="list-group-item-heading">{{$category->title}}</h4>
                        <p class="list-group-item-text">{{$category->description}}</p>
   					</a>
                    @endforeach
                </div>

	        </div>
        </div>
	</div>

	<div class="col-lg-4">
		<div class="panel panel-primary">
	        <div class="panel-heading">
	            <strong>Dodaj novi žanr</strong>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	
	        	<form method="POST" action="{{route('store.strip.category')}}" id="addCategory">
       	            <div class="form-group">
		                <label for="name">Žanr:</label>
		                    <input type="text" class="form-control" id="name" name="title" placeholder="ime...">
		            </div>

		            <div class="form-group">
		                <label for="description"><small>Opis:</small></label>
		                    <textarea class="form-control" id="description" name="description"></textarea>
		            </div>
		  
		            <div class="form-group">
		         		            {{ csrf_field() }}  
		                <button type="submit" class="btn btn-primary">Dodaj</button>
		            </div>
        		</form>   

	        </div>
        </div>
	</div>

</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <hr>
        <h5><a href="{{route('admin.index.stripova')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>
    </div>
</div>

@endsection
