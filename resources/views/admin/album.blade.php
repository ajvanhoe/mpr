@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <hr>
		
		<ol class="breadcrumb" style="text-align:center;">
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>  Naslovna</a>
            </li>
            <li>
                <i class="fa fa-th"></i>  Albumi
            </li>
            <li class="active">
                <i class="fa fa-th-list"></i> Prikaz albuma
            </li>
        </ol>

    </div>
    <!-- /.col-lg-12 -->
</div> <!-- /.row -->


<div class="row">
    <div class="col-lg-6 col-lg-offset-2">
        @include('partials.messages')
    </div>
</div>


<div class="row">
	<div class="col-lg-8 col-lg-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h1><strong>{{$album->title }}</strong></h1>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">


						<div class="row">
							<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 250px; height: 200px" class="img-thumbnail" src="/media/albumi/{{$naslovna->file}}"> -->

								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{asset('media/albumi/'.$naslovna->file)}}">
							@else	
								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	


						
												
						<hr>
						<a class="btn btn-outline btn-xs btn-info" href="{{route('edit.album', ['id' => $album->id])}}">izmeni</a>
						<button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$album->id}}">obriši</button>
							<form method="POST" action="{{route('delete.album', ['id' => $album->id])}}" id="delete:{{$album->id}}">
								{{ csrf_field() }} 
       						</form>
						
						
				@include('partials.modals.modal-album-delete')				
					
						
							</div> <!-- /.col-md-4 -->

						<!-- info -->
						<div class="col-md-8">
															
								<table class="table table-striped table-borderless">
								  <tbody>
									<tr>
									  <td style="width:10%">naslov:</td>
									  <td colspan="2">{{$album->title }}</td>
									</tr>
									<tr>
									  <td style="width:10%">izdavač:</td>
									  <td colspan="2">{{ $album->publisher }}</td>
									</tr>
									<tr>
									  <td style="width:10%">tip:</td>
									  <td colspan="2">{{ $album->type }}</td>
									</tr>
									<tr>
									  <td style="width:10%">žanr:</td>
									  <td colspan="2">{{ $album->category }}</td>
									</tr>
									<tr>
									  <td style="width:10%">kategorija:</td>
									  <td colspan="2">{{ $album->subcategory }}</td>
									</tr>
									<tr>
									  <td style="width:10%">cena:</td>
									  <td colspan="2">{{ $album->price }}</td>
									</tr>
								  </tbody>
								</table>
							
							
						</div> <!--  /.col-md8 -->
	
					   </div> <!-- /.row -->
					  
						<hr>
						
						<div class="well well-lg">
							<h5>Opis:</h5>
							{{$album->description}}
						</div>
						
						<hr>

						<div class="well well-lg">
							<h5>Slike:</h5>
							@foreach($slike as $slika)
							<!-- <div class="slika-content"> -->
<!-- 								<img style="width: 150px; height: 100px" class="img-thumbnail" src="/media/albumi/{{$slika->file}}">
 -->
<img style="width: 150px; height: 100px" class="img-thumbnail" src="{{asset('media/albumi/'.$slika->file)}}">
							<!--  <div class="obrisi-sliku" onclick="confirm('obrisi sliku?')">x</div>
							   </div> -->
							@endforeach
						</div>

				            
						<hr>
						
						<h5><a href="{{route('admin.index.albuma')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>
		
                
            </div> 
        </div>
    </div>
</div>

@endsection

@section('styles')

<style type="text/css">
	
   /*.slika-content{
       display: inline-block;
       position: relative;  

   }
   .obrisi-sliku{
   	   position: absolute;
   	   right: 5px;
   	   top: 5px;
   	   color: white;
   	   background: red;
   	   padding: 2px  6px;
   	   border-radius: 50%;
   }

   .obrisi-sliku:hover{
   	cursor: pointer;

   }*/


</style>
@endsection('style')