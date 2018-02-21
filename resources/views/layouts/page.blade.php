@extends('layouts.master')

@section('title')
	Page
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
	            <div class="panel-heading">Dashboard</div>
	        	<div class="panel-body">
					<p>You are here: @yield('title')</p>
					<p>current url: {{ url()->current() }}
					<h5><a href="/">back...</a></h5>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			
					
						@yield('page_content')

			
		</div>
	</div>









</div>
@endsection