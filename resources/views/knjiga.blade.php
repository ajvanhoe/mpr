@extends('layouts.app')

@section('content')

<div class="container">

	<div class="row justify-content-center">
        <div class="col-md-8">
            @include('partials.messages')
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white text-center bg-success mb-3">
				<br>
				<h1><strong>{{$knjiga->title }}</strong></h1>
				</div>

                <div class="card-body">
                 					   
						<div class="row">
							<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 250px; height: 200px" class="img-thumbnail" src="/media/knjige/{{$naslovna->file}}"> -->

								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{asset('media/knjige/'.$naslovna->file)}}">
							@else	
								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	

						<hr>
													
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
						
						<h5><a href="{{route('public.index.knjiga')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>
		
                
                </div> 
            </div>
        </div>
    </div>
	
</div>
	

@endsection