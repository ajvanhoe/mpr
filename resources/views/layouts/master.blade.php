<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>@yield('title')</title>
	

	<!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">


	<!-- 
	<link href="css/bootstrap.min.css" rel="stylesheet">

   	<link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> 
    -->

    <!-- Fonts -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	<!-- <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css"> 

	-->

	<!-- Custom CSS -->
	@yield('styles')

</head>
<body>

	<!--@yield('header') -->
	@include('partials.header_a')

	@yield('content')


	<!-- jQuery -->
    <script src="{{ asset('js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <!-- custom scripts -->
    @yield('scripts')


    <!--
     <script src="js/bootstrap.min.js"></script> 

	<script src="{{ asset('js/jquery.js') }}"></script>			
	<script src="{{ asset('js/bootstrap.js') }}"></script>		
	<script src="{{ asset('js/app.js') }}"></script>			

	-->

</body>
</html>