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
                <i class="fa fa-th-list"></i> Prikaz knjige
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
                <h1><strong>{{$knjiga->title }}</strong></h1>
            </div> <!-- /.panel-heading -->
            <div class="panel-body">
    	

            	<div class="row">
							<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 250px; height: 200px" class="img-thumbnail" src="/media/knjige/{{$naslovna->file}}"> -->

								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{asset('media/knjige/'.$naslovna->file)}}">
							@else	
								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	


						
												
						<hr>
						<a class="btn btn-outline btn-xs btn-info" href="{{route('edit.knjiga', ['id' => $knjiga->id])}}">izmeni</a>
						<button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$knjiga->id}}">obriši</button>
							<form method="POST" action="{{route('delete.knjiga', ['id' => $knjiga->id])}}" id="delete:{{$knjiga->id}}">
								{{ csrf_field() }} 
       						</form>
						
							


						
	<!-- Modal -->
<div class="modal fade" id="modal{{$knjiga->id}}" tabindex="-1" role="dialog" aria-labelledby="modalLabel{{$knjiga->id}}" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel{{$knjiga->id}}">Obriši knjigu?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Da li želite da obrišete ovu knjigu? <br>
	   Nakon toga nije moguće povratiti obrisano.
      </div>
      <div class="modal-footer">
       
	<button type="button" class="btn btn-secondary" data-dismiss="modal">ipak ne...</button>
	<button type="submit" class="btn btn-primary btn-danger" form="delete:{{$knjiga->id}}">obriši</button>
	
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
									  <td colspan="2">{{$knjiga->title }}</td>
									</tr>
									<tr>
									  <td style="width:10%">izdavač:</td>
									  <td colspan="2">{{ $knjiga->publisher }}</td>
									</tr>
									<tr>
									  <td style="width:10%">autor:</td>
									  <td colspan="2">{{ $knjiga->author }}</td>
									</tr>
									<tr>
									  <td style="width:10%">žanr:</td>
									  <td colspan="2">{{ $knjiga->category }}</td>
									</tr>
									<tr>
									  <td style="width:10%">kategorija:</td>
									  <td colspan="2">{{ $knjiga->subcategory }}</td>
									</tr>
									<tr>
									  <td style="width:10%">cena:</td>
									  <td colspan="2">{{ $knjiga->price }}</td>
									</tr>
								  </tbody>
								</table>
							
							
						</div> <!--  /.col-md8 -->
	
					   </div> <!-- /.row -->
					  
						<hr>
						
						<div class="well well-lg">
							<h5>Opis:</h5>
							{{$knjiga->description}}
						</div>
						
						<hr>

						<div class="well well-lg">
							<h5>Slike:</h5>
							@foreach($slike as $slika)
							
								<!-- <img style="width: 150px; height: 100px" class="img-thumbnail" src="/media/knjige/{{$slika->file}}"> -->
<img style="width: 150px; height: 100px" class="img-thumbnail" src="{{asset('media/knjige/'.$slika->file)}}">
							@endforeach
						</div>

				            
						<hr>
						
						<h5><a href="{{route('admin.index.knjiga')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>



            </div>
        </div>
    </div>
</div>

@endsection