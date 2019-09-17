<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MPR Admin - Dashboard</title>

     <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS-->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <!-- <link href="{{asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin.css')}}" rel="stylesheet">

                <!-- Dividers -->
    <link href="{{asset('css/dividers.css')}}" rel="stylesheet">


    <!-- Custom styles -->
    @yield('styles')

    <!-- Custom fonts -->
    @yield('fonts')
  </head>

  <body id="page-top">

    @include('partials.dashboard-navigation')

    <div id="wrapper">

     @include('partials.dashboard-sidebar')

      <div id="content-wrapper">
        <div class="container-fluid">
          @yield('content')
        </div> <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        @include('partials.dashboard-footer')
      </div> <!-- /.content-wrapper -->
    </div> <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    @include('partials.scroll-button')

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Page level plugin JavaScript-->
    <!-- <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script> -->
    <!-- <script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script> -->
    <!-- <script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script> -->

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin.min.js')}}"></script>

    <!-- Demo scripts for this page-->
    <!-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->
    <!-- <script src="{{asset('js/demo/chart-area-demo.js')}}"></script> -->
    
    <!-- Custom scripts -->
    @yield('scripts')

  </body>

</html>
