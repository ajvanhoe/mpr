@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header text-center">Mala prodavnica retkosti - admin panel</h1>
    </div>
    <!-- /.col-lg-12 -->
</div> <!-- /.row -->

<!-- 
<div clas="row">
	<div class="col-lg-6">

		<div class="panel panel-default">
	        <div class="panel-heading">
	        	<strong>Poruke</strong>
	        </div>

	         <div class="panel-body">
	         	- najnovije poruke
	         </div>
	    </div>
	</div>

	<div class="col-lg-6">

		<div class="panel panel-default">
	        <div class="panel-heading">
	        	<strong>Kalendar</strong>
	        </div>

	         <div class="panel-body">
	        	-dodati kalendar-
	         </div>
	    </div>
	</div>


</div> -->

<div class="row">

	<div class="col-lg-4">
		<div class="panel panel-primary">
	        <div class="panel-heading">
	        	<strong>Albumi - novo</strong> 
	        </div>

	         <div class="panel-body">

	         	<hr>

	         	@foreach($albumi as $album)

	         		<?php 
					
					$this_album = $album->id; 
					$naslovna = $album->media->shift();
					
					?>
					
					<div class="row">

						
						<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 75px; height: 50px" class="img-thumbnail" src="/media/albumi/{{$naslovna->file}}"> -->

								<img style="width: 75px; height: 50px" class="img-thumbnail" src="{{asset('media/albumi/'.$naslovna->file)}}">
							@else	
								<img style="width: 75px; height: 50px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	
						
						</div> 
						<div clas="col-md-8">
							Album: <a href="{{route('show.album', ['id' => $this_album])}}" target="__blank"><strong>{{$album->title}}</strong></a><br>
							unet: {{$album->created_at}}<br>
							
						</div>
					</div>

					<hr>
	         	@endforeach
	         </div>
	    </div>
	</div>


	<div class="col-lg-4">
		<div class="panel panel-green">
	        <div class="panel-heading">
	        	<strong>Knjige</strong>
	        </div>

	         <div class="panel-body">
	         	
	         		<hr>
	         	@foreach($knjige as $knjiga)

	         		<?php 
					
					$this_knjiga = $knjiga->id; 
					$naslovna = $knjiga->media->shift();
					
					?>
					
					<div class="row">

						
						<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 75px; height: 50px" class="img-thumbnail" src="/media/knjige/{{$naslovna->file}}"> -->

								<img style="width: 75px; height: 50px" class="img-thumbnail" src="{{asset('media/knjige/'.$naslovna->file)}}">
							@else	
								<img style="width: 75px; height: 50px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	
						
						</div> 
						<div clas="col-md-8">
							Knjiga: <a href="{{route('show.knjiga', ['id' => $this_knjiga])}}" target="__blank"><strong>{{$knjiga->title}}</strong></a><br>
							uneta: {{$knjiga->created_at}}<br>
							
						</div>
					</div>

					<hr>
	         	@endforeach


	         </div>
	    </div>
    </div>

	<div class="col-lg-4">

		<div class="panel panel-yellow">
	        <div class="panel-heading">
	        	<strong>Stripovi</strong>
	        </div>

	         <div class="panel-body">
	         	<hr>
	         	@foreach($stripovi as $strip)

	         		<?php 
					
					$this_strip = $strip->id; 
					$naslovna = $strip->media->shift();
					
					?>
					
					<div class="row">

						
						<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 75px; height: 50px" class="img-thumbnail" src="/media/stripovi/{{$naslovna->file}}"> -->

								<img style="width: 75px; height: 50px" class="img-thumbnail" src="{{asset('media/stripovi/'.$naslovna->file)}}">
							@else	
								<img style="width: 75px; height: 50px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
							@endif	
						
						</div> 
						<div clas="col-md-8">
							Strip: <a href="{{route('show.strip', ['id' => $this_strip])}}" target="__blank"><strong>{{$strip->title}}</strong></a><br>
							unet: {{$strip->created_at}}<br>
							
						</div>
					</div>

					<hr>
	         	@endforeach




	         </div>
	    </div>
	</div>

</div>
<!-- /.row -->

@endsection



@section('styles')

@endsection

@section('scripts')

@endsection