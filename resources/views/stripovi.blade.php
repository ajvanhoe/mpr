@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white bg-primary mb-3"><h1><strong>Stripovi</strong><h1></div>

                <div class="card-body">
				       <div class="container">

				@foreach($stripovi as $strip)
					
					<?php 
					
					$this_strip = $strip->id; 
					$naslovna = $strip->media->shift();
					
					?>
					
					<div class="row">

						
						<div class="col-md-3">

							@if($naslovna !== null)
								<!-- <img style="width: 200px; height: 150px" class="img-thumbnail" src="/media/stripovi/{{$naslovna->file}}"> -->

								<img style="width: 200px; height: 150px" class="img-thumbnail" src="{{asset('media/stripovi/'.$naslovna->file)}}">
							@else	
								<img style="width: 200px; height: 150px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	
						
						</div> 

						<!-- info -->
						<div class="col-md-4">
							naslov:&nbsp;&nbsp;&nbsp;<span style="font-size:28px;"><strong>{{$strip->title }}</strong></span><br>
							izdavač:&nbsp;&nbsp;&nbsp;<span style="font-size:20px;">{{ $strip->author }}</span>
							
							<hr>
							<a class="btn btn-outline btn-xs btn-info" href="{{route('public.show.strip', ['id' => $strip->id])}}">detaljnije</a>

						</div>

						
						<div class="col-md-5">
						
							<table class="table table-striped table-borderless">
								  <tbody>
							
									<tr>
									  <td style="width:10%"><span style="font-size:24px;">tip:</span></td>
									  <td colspan="2"><span style="font-size:24px;"><strong>{{ $strip->publisher }}</strong></span></td>
									</tr>
									
									<tr>
									 
									  <td style="width:10%">žanr:</td>
									  <td colspan="2">{{ $strip->category }}</td>
									</tr>
								
									<tr>
									  <td style="width:10%">cena:</td>
									  <td colspan="2">{{ $strip->price }}</td>
									</tr>
									
									
								  </tbody>
								</table>
						</div>

					</div>
					<strong><hr></strong>
					@endforeach
					{{ $stripovi->links() }}
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
