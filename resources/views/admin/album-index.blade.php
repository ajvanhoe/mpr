@extends('layouts.admin')

@section('styles')
 <!-- Page level plugin CSS-->
 <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

@endsection

@section('content')

<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('dashboard')}}">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Albumi</li>
   </ol>

<!-- <div class="container"> -->

    <div class="row justify-content-center mb-1">
        @include('partials.messages')
    </div>

    <!-- <div class="row">
      <div class="col-md-12"> -->
      @include('partials.dashboard-album-table')
      <!-- </div>
    </div> -->


<!-- </div> -->
@endsection

@section('scripts')

<script src="{{asset('vendor/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

<!-- <script src="{{asset('js/demo/datatables-demo.js')}}"></script> -->

@endsection
