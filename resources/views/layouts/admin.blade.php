<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MPR') }}</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- SB Admin CSS -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">
     
    <!-- Custom Styles -->    
    @yield('styles')

     <!-- Font Awersome -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom Fonts -->
    @yield('fonts')   

</head>
<body>

    <div id="app">
        <div id="wrapper">

            @include('partials.navbar-admin')
          

            <div id="page-wrapper">

                @yield('content')

            </div>

        </div> <!-- /#wrapper -->
    </div>  <!-- /.APP -->

    <!-- jQuery -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('vendor/metisMenu/metisMenu.min.js') }}"></script>

    <!-- SB Admin JavaScript -->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Custom JavaScript -->
    @yield('scripts')

</body>

</html>
