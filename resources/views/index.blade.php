@extends('layouts.master')

@section('title')
	Template playground
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
	            <div class="panel-heading">Dashboard</div>
	        	<div class="panel-body">


					<p>You are here: @yield('title')</p>
					<hr>
					<p>available pages:</p>

					<ul>
						<li><a href="/page">page</a></li>
						<li><a href="/helpers">helpers</a></li>
						<li><a href="/crud">crud</a></li>							
						<li><a href="/faucets">faucets</a></li>	
						<li><a href="/api">api</a></li>	
						<li><a href="/coin">coin</a></li>								
 					</ul>

 					<hr>

 					<div class="col-md-6">
					<div class="panel panel-primary">
                      <div class="panel-heading">
                        <h3 class="panel-title">Podsetnik</h3>
                      </div>
                      <div class="panel-body">
                        <p> * stao kod migracije, nisam uradio, kontroler prazan, model doraditi i dodati template fajl Model.php</p>
                      </div>
                    </div>
					</div>



				</div>
			</div>
		</div>
	</div>
</div>
@endsection