@extends('layouts.admin')

@section('styles')
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" type="text/css"> -->
<link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('content')

<!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="{{route('dashboard')}}">Dashboard</a>
    </li>
     <li class="breadcrumb-item active">
      <a href="{{route('show.book')}}">Antikvarnica</a>
    </li>
    <li class="breadcrumb-item active">Novi artikal</li>
   </ol>

<div class="container">

    <div class="row justify-content-center mb-1">
        @include('partials.messages')
    </div>

    <div class="row">
     <div class="col-md-8">
      @include('partials.dashboard-item-form')
     </div>
    </div>


</div>
@endsection


@section('scripts')
 <!-- UPLOAD IMAGE-->
 <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script> -->
<script src="{{ asset('js/dropzone.min.js') }}"></script>
@endsection