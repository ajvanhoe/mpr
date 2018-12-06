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
                <i class="fa fa-th-list"></i> Prikaz stripa
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
	<div class="col-lg-8 col-lg-offset-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1><strong>{{$strip->title }}</strong></h1>
            </div> <!-- /.panel-heading -->
            <div class="panel-body">
    	

            	<div class="row">
							<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 250px; height: 200px" class="img-thumbnail" src="/media/stripovi/{{$naslovna->file}}"> -->

								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{asset('media/stripovi/'.$naslovna->file)}}">
							@else	
								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	


						
												
						<hr>
						<a class="btn btn-outline btn-xs btn-info" href="{{route('edit.strip', ['id' => $strip->id])}}">izmeni</a>
						<button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$strip->id}}">obriši</button>
							<form method="POST" action="{{route('delete.strip', ['id' => $strip->id])}}" id="delete:{{$strip->id}}">
								{{ csrf_field() }} 
       						</form>
						
							


						
	<!-- Modal -->
<div class="modal fade" id="modal{{$strip->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{$strip->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel{{$strip->id}}">Obriši strip?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Da li želite da obrišete ovaj strip? <br>
	   Nakon toga nije moguće povratiti obrisano.
      </div>
      <div class="modal-footer">
       
	<button type="button" class="btn btn-secondary" data-dismiss="modal">ipak ne...</button>
	<button type="submit" class="btn btn-primary btn-danger" form="delete:{{$strip->id}}">obriši</button>
	
      </div>
    </div>
  </div>
</div>
					



					
						
							</div> <!-- /.col-md-4 -->

						<!-- info -->
						<div class="col-md-8">
															
								<table class="table table-striped table-borderless">
								  <tbody>
									<tr>
									  <td style="width:10%">naslov:</td>
									  <td colspan="2">{{$strip->title }}</td>
									</tr>
									<tr>
									  <td style="width:10%">izdavač:</td>
									  <td colspan="2">{{ $strip->publisher }}</td>
									</tr>
									<tr>
									  <td style="width:10%">autor:</td>
									  <td colspan="2">{{ $strip->author }}</td>
									</tr>
									<tr>
									  <td style="width:10%">žanr:</td>
									  <td colspan="2">{{ $strip->category }}</td>
									</tr>
									<tr>
									  <td style="width:10%">kategorija:</td>
									  <td colspan="2">{{ $strip->subcategory }}</td>
									</tr>
									<tr>
									  <td style="width:10%">cena:</td>
									  <td colspan="2">{{ $strip->price }}</td>
									</tr>
								  </tbody>
								</table>
							
							
						</div> <!--  /.col-md8 -->
	
					   </div> <!-- /.row -->
					  
						<hr>
						
						<div class="well well-lg">
							<h5>Opis:</h5>
							{{$strip->description}}
						</div>
						
						<hr>

						<div class="well well-lg">
							<h5>Slike:</h5>
							@foreach($slike as $slika)
							
								<!-- <img style="width: 150px; height: 100px" class="img-thumbnail" src="/media/stripovi/{{$slika->file}}"> -->
<img style="width: 150px; height: 100px" class="img-thumbnail" src="{{asset('media/stripovi/'.$slika->file)}}">
							@endforeach
						</div>

				            
						<hr>
						
						<h5><a href="{{route('admin.index.stripova')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>



            </div>
        </div>
    </div>
</div>

@endsection