@extends('layouts.master')

@section('title')
	Page
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
	            <div class="panel-heading">Faucets:</div>
	        	<div class="panel-body">
					
						@yield('page_content')

				</div>
			</div>
		</div>
	</div>
</div>
@endsection