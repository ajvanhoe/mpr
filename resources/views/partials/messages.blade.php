@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger text-center alert-dismissable">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			{{ $error }}			
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success text-center alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{{ session('success') }}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger text-center alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{{ session('error') }}
	</div>
@endif



@if(session('info'))
<div class="alert alert-info alert-dismissable">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		{{ session('info') }}<br>
		@if(session('alert-link'))
			&nbsp;&nbsp;<i class="fa fa-arrow-circle-right"></i>&nbsp;<a href="{{ session('alert-link') }}" class="alert-link">{{ session('alert-link-text')}}</a>.
		@endif
</div>
@endif