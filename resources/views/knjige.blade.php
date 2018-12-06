@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white bg-success mb-3"><h1><strong>Knjige</strong><h1></div>

                <div class="card-body">
				       <div class="container">

				@foreach($knjige as $knjiga)
					
					<?php 
					
					$this_knjiga = $knjiga->id; 
					$naslovna = $knjiga->media->shift();
					
					?>
					
					<div class="row">

						
						<div class="col-md-3">

							@if($naslovna !== null)
								<!-- <img style="width: 200px; height: 150px" class="img-thumbnail" src="/media/knjige/{{$naslovna->file}}"> -->

								<img style="width: 200px; height: 150px" class="img-thumbnail" src="{{asset('media/knjige/'.$naslovna->file)}}">
							@else	
								<img style="width: 200px; height: 150px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	
						
						</div> 

						<!-- info -->
						<div class="col-md-4">
							naslov:&nbsp;&nbsp;&nbsp;<span style="font-size:28px;"><strong>{{$knjiga->title }}</strong></span><br>
							izdavač:&nbsp;&nbsp;&nbsp;<span style="font-size:20px;">{{ $knjiga->author }}</span>
							
							<hr>
							<a class="btn btn-outline btn-xs btn-success" href="{{route('public.show.knjiga', ['id' => $knjiga->id])}}">detaljnije</a>

						</div>

						
						<div class="col-md-5">
						
							<table class="table table-striped table-borderless">
								  <tbody>
							
									<tr>
									  <td style="width:10%"><span style="font-size:24px;">tip:</span></td>
									  <td colspan="2"><span style="font-size:24px;"><strong>{{ $knjiga->publisher }}</strong></span></td>
									</tr>
									
									<tr>
									 
									  <td style="width:10%">žanr:</td>
									  <td colspan="2">{{ $knjiga->category }}</td>
									</tr>
								
									<tr>
									  <td style="width:10%">cena:</td>
									  <td colspan="2">{{ $knjiga->price }}</td>
									</tr>
									
									
								  </tbody>
								</table>
						</div>

					</div>
					<strong><hr></strong>
					@endforeach
					{{ $knjige->links() }}
						</div> <!-- /. Container -->
			
							<hr>
							
							<h5><a href="{{route('welcome')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>
					
                </div>
            </div>
        </div>
    </div>
	
</div>
	
	
</div>
@endsection
