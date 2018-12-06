@extends('layouts.app')

@section('content')
<div class="container">

	<div class="row justify-content-center">
        <div class="col-md-10">
            @include('partials.messages')
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white bg-primary mb-3"><h1><strong>Albumi</strong><h1></div>

                <div class="card-body">
        			 
				       <div class="container">
           
					
				@foreach($albumi as $album)
					
					<?php 
					
					$this_album = $album->id; 
					$naslovna = $album->media->shift();
					
					?>
					
					<div class="row">

						
						<div class="col-md-3">

							@if($naslovna !== null)
								<!-- <img style="width: 200px; height: 150px" class="img-thumbnail" src="media/albumi/{{$naslovna->file}}"> -->

								<img style="width: 200px; height: 150px" class="img-thumbnail" src="{{asset('media/albumi/'.$naslovna->file)}}">
							@else	
								<img style="width: 200px; height: 150px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	
						
						</div> 

						<!-- info -->
						<div class="col-md-4">
							naslov:&nbsp;&nbsp;&nbsp;<span style="font-size:28px;"><strong>{{$album->title }}</strong></span><br>
							izdavač:&nbsp;&nbsp;&nbsp;<span style="font-size:20px;">{{ $album->publisher }}</span>
							
							<hr>
							<a class="btn btn-outline btn-xs btn-info" href="{{route('public.show.album', ['id' => $album->id])}}">detaljnije</a>

						</div>

						
						<div class="col-md-5">
						
							<table class="table table-striped table-borderless">
								  <tbody>
							
									<tr>
									  <td style="width:10%"><span style="font-size:24px;">tip:</span></td>
									  <td colspan="2"><span style="font-size:24px;"><strong>{{ $album->type }}</strong></span></td>
									</tr>
									
									<tr>
									 
									  <td style="width:10%">žanr:</td>
									  <td colspan="2">{{ $album->category }}</td>
									</tr>
								
									<tr>
									  <td style="width:10%">cena:</td>
									  <td colspan="2">{{ $album->price }}</td>
									</tr>
									
									
								  </tbody>
								</table>

						</div>


					</div>
					<hr>
					@endforeach
					{{ $albumi->links() }}
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
