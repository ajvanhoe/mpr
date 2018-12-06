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
                <div class="card-header text-white text-center bg-primary mb-3">
				<br>
				<h1><strong>{{$album->title }}</strong></h1>
				</div>

                <div class="card-body">
                 					   
						<div class="row">
							<div class="col-md-4">

							@if($naslovna !== null)
								<!-- <img style="width: 250px; height: 200px" class="img-thumbnail" src="/media/albumi/{{$naslovna->file}}"> -->

								<img style="width: 250px; height: 200px" class="img-thumbnail" src="{{asset('media/albumi/'.$naslovna->file)}}">
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
							    <!-- <img style="width: 150px; height: 100px" class="img-thumbnail" src="/media/albumi/{{$slika->file}}"> -->

							     <img style="width: 150px; height: 100px" class="img-thumbnail" src="{{asset('media/albumi/'.$slika->file)}}">
							@endforeach
						</div>

				            
						<hr>
						
						<h5><a href="{{route('public.index.albuma')}}"><i class="fa fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad...</a></h5>
		
                
                </div> 
            </div>
        </div>
    </div>
	
</div>
	

@endsection