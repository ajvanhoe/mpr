@extends('layouts.page')

@section('title')
	AAApi
@endsection

@section('page_content')

			<div class="panel panel-default">
	            <div class="panel-heading">
				<a href="">
				 <h3>OVDE PODACI</h3>	
				</a>
				</div>
	        	<div class="panel-body">

					
					
	        		{{ $final->name }}
					{{ $final->price_usd }}
		    	</div>
			</div>
		
@endsection