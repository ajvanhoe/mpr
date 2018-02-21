@extends('layouts.page')

@section('title')
	Helpers
@endsection

@section('page_content')

			<div class="panel panel-default">
	            <div class="panel-heading">
				<a href="https://laravel.com/docs/5.5/helpers" target="__blank">
				 <h3>Helpers</h3>	
				</a>
				</div>
	        	<div class="panel-body">

					
					<ul class="nav navbar-nav">

			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Paths <span class="caret"></span></a>
			          	<ul class="dropdown-menu">

							<li><a href="#">
								<p>app_path()</p>
								<p>{{ app_path() }}</p>
								</a>
							</li>
							<li role="separator" class="divider"></li>	
							<li>
								<a href="#"><p>base_path()</p>
								<p>{{ base_path() }}</p>
								</a>
							</li>
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p>config_path()</p>
								<p>{{ config_path() }}</p>
								</a>
							</li>	
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p>database_path()</p>
								<p>{{ database_path() }}</p>
								</a>
							</li>	
							<li role="separator" class="divider"></li>
							<li><a href="https://laravel.com/docs/5.5/mix" target="__blank">
								<p>mix()</p>
								<p>The mix function returns the path to a versioned Mix file</p>
								</a>
							</li>	
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p>public_path()</p>
								<p>{{ public_path() }}</p>
								</a>
							</li>	
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p>resource_path()</p>
								<p>{{ resource_path() }}</p>
								</a>
							</li>	
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p>resource_path()</p>
								<p>{{ resource_path() }}</p>
								</a>
							</li>	
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p>storage_path()</p>
								<p>{{ storage_path() }}</p>
								</a>
							</li>	
				            <li role="separator" class="divider"></li>
					           
						</ul>
				    </li>


				     <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">URLs <span class="caret"></span></a>
			          	<ul class="dropdown-menu">

			          		<li>
								<a href="#"><p>URL current</p>
								<p>{{ url()->current() }}</p>
								</a>
							</li>	
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p> full </p>
								<p>{{ url()->full()  }}</p>
								</a>
							</li>		
							<li role="separator" class="divider"></li>
							<li>
								<a href="{{url('/crud')}}"><p>custom url - url('/crud')</p>
									<p>url('/crud')</p>
								<a>
							</li>		
							<li role="separator" class="divider"></li>
							<li>
								<a href="#"><p> secure_url()</p>
								<p>{{secure_url('/crud') }}</p>
								</a>
							</li>	



			          	</ul>
			         </li>



			         <li><a href="https://laravel.com/docs/5.5/migrations#columns" target="__blank">Polja u bazi</a></li>





				    </ul>	
					

		    	</div>
			</div>
		
@endsection