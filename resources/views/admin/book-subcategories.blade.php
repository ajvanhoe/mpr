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
                <i class="fa fa-th"></i>  Knjige
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Pregled kategorija
            </li>

            <li class="active">
                <i class="fa fa-plus-circle"></i> Podkategorije
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
	<div class="panel panel-default">
	        <div class="panel-heading">
	          <span style="font-size:16px;"> <strong>{{$category->title}}</strong></span>

	            <div style="float:right;">
	            <a data-toggle="collapse" class="btn btn-outline btn-xs btn-primary" href="#collapse1"><i class="fa fa-edit"></i></a>

	            <button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$category->id}}"><i class="fa fa-times"></i></button>

							<form method="POST" action="{{route('delete.knjiga.category', ['id' => $category->id])}}" id="delete:{{$category->id}}">
								{{ csrf_field() }} 
       				</form>
	        	</div>
	        </div>
          <!-- /.panel-heading -->
<div class="panel-body">
  
  <div class="row">

    <div class="col-lg-6">
      <div class="well">
        {{$category->description}}
      </div>
    </div>

    <div class="col-lg-6">
	    <ul class="list-group">
     	@foreach($subcategories as $subcategory)
		    <li class="list-group-item">
          <dl>
            <dt>{{$subcategory->title}}<span style="float:right; font-size:10px;"><a href="{{route('delete.knjiga.subcategory', ['id' => $subcategory->id])}}" onclick="confirm('ukloni?')">delete</a></span></dt>
            @foreach($subcategory->sub_subcats() as $subcat)
            <dd>
            - {{$subcat->title}}<span style="float:right; font-size:10px;"><a href="{{route('delete.knjiga.subcategory', ['id' => $subcat->id])}}" onclick="confirm('ukloni?')">delete</a></span>
            </dd>
            @endforeach

          </dl>
          
        </li>
      @endforeach
      </ul>
    </div>


 
  </div>

  <hr>

  <div id="collapse1" class="collapse">
    <div class="panel-body">

      <form method="POST" action="{{route('edit.knjiga.category', ['id' => $category->id])}}" id="editCategory">
          <div class="form-group">
            <label for="name">Kategorija:</label>
            <input type="text" class="form-control" id="name" name="title" placeholder="{{$category->title}}">
          </div>

          <div class="form-group">
            <label for="description"><small>Opis:</small></label>
              <textarea class="form-control" id="description" name="description">{{$category->description}}</textarea>
          </div>
    
          <div class="form-group">
            {{ csrf_field() }}  
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
       </form>   
  
    </div>
  </div> <!-- /#collapse1 -->
  

    </div>
    <!-- /.panel-body -->
  </div> <!-- /.panel -->
</div> <!-- .col-lg-6 -->

	<div class="col-lg-4">
		<div class="panel panel-primary">
	        <div class="panel-heading">
	            <strong>Dodaj novu podkateogoriju</strong>
	        </div>
	        <!-- /.panel-heading -->
	        <div class="panel-body">
	        	
	        	<form method="POST" action="{{route('store.knjiga.subcategory', ['category' => $category->id])}}" id="addSubcategory">
       	            <div class="form-group">
		                <label for="name">Podkategorija:</label>
		                    <input type="text" class="form-control" id="name" name="title" placeholder="ime podkategorije...">
		            </div>


			  <div class="form-group">
			  		<label for="description"><small>dodati pod:</small></label>
					  <select name="parent" class="form-control col-md-8" form="addSubcategory">
				  		<option value=""><em>Izaberi podkategoriju...</em></option>
							@foreach($subcategories as $subcategory)
								<option value="{{$subcategory->id}}" style="font-size: 10px;">	
									{{$subcategory->title}}
								</option>	
               @endforeach
					   </select>
					<!-- <p class="help-block"></p>  -->
			   </div>
			 			<hr>
   					<div class="form-group">
               {{ csrf_field() }}  
		           <button type="submit" class="btn btn-primary">Dodaj</button>
		        </div>
        		</form>   

	        </div>
	        <!-- /.panel-body -->
        </div>	
        <!-- /.panel -->
	</div>  
	<!-- /.col-lg-4 -->
                
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-12">
        <hr>
        <h5><a href="{{route('knjige.index.kategorija')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>
    </div>
</div>

@include('partials.modals.modal-book-sub-delete')

@endsection

