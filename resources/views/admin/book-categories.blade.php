@extends('layouts.admin')

@section('styles')
<!-- custom css -->
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">  
@endsection

@section('content')

<!-- Breadcrumb-->
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="{{route('dashboard')}}">Dashboard</a>
  </li>
  <li class="breadcrumb-item active">
    <a href="{{route('show.book')}}">Knjige</a>
  </li>
  <li class="breadcrumb-item active">Kategorije</li>
</ol>

<div class="container">
    <div class="row justify-content-center mb-1">
        @include('partials.messages')
    </div>

    <div class="row">
      <div class="col-md-8">
        @include('partials.dashboard-book-categories')
      </div> <!-- /.col-md-8 -->

      <div class="col-md-4">
        @include('partials.dashboard-book-addcategory')
      </div>  <!-- /.col-md-4 -->
    </div>  <!-- /.row -->
</div>
@endsection


