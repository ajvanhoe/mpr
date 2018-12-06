@extends('layouts.admin')

@section('styles')
<!-- DataTables CSS -->
<link href="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.css') }}" rel="stylesheet">
<!-- DataTables Responsive CSS -->
<link href="{{ asset('vendor/datatables-responsive/dataTables.responsive.css') }}" rel="stylesheet">
@endsection

@section('content')


<div class="row">
    <div class="col-lg-12">
       	
        <hr>
		  

        <ol class="breadcrumb" style="text-align:center;">
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>  Naslovna</a>
            </li>
            <li>
                <i class="fa fa-th"></i>  Stripovi
            </li>
            <li class="active">
                <i class="fa fa-th-list"></i> Pregled stripova
            </li>
        </ol>

    </div>
    <!-- /.col-lg-12 -->
</div> <!-- /.row -->


<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        @include('partials.messages')
    </div>
</div>

   	<div class="row">
    	<div class="col-lg-12">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <strong>Stripovi - pregled svih stripova</strong>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
    	

    	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    	<th>Slika</th>
                                        <th>Strip</th>
										<th>Autor</th>
                                        <th>Cena</th>
                                        <th>Izdavač</th>
                                        <th>Žanr</th>
                                        <th>Kategorija</th>
                                        <th>Opcije</th>
                                        
                                    </tr>
                                </thead>


                                <tbody>

                                	@foreach($stripovi as $strip)

                                           <?php 
                                            $this_strip = $strip->id;
                                            $naslovna = $strip->media->shift();
                                            
                                            ?>
                    
                                	
                                		<tr>
                                			<td class="center">
                                			@if(isset($naslovna) && $naslovna !== null)
											<!-- <img style="width: 55px; height: 40px" class="img-thumbnail" src="/media/stripovi/{{$naslovna->file}}"> -->

                                            <img style="width: 55px; height: 40px" class="img-thumbnail" src="{{asset('media/stripovi/'.$naslovna->file)}}">
											@else	
											<img style="width: 55px; height: 40px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
											@endif	
                                			</td>
                                			<td>
                                				<a href="{{route('show.strip', ['id'=> $strip->id])}}">
                                				{{ $strip->title }}
                                				</a>
                                			</td>

                                			<td class="center">{{ $strip->author }}</td>
                                			<td class="center">{{ $strip->price }}</td>

                                			<td>{{ $strip->publisher }}</td>
                                			<td>{{ $strip->category }}</td>
                                			<td>{{ $strip->subcategory }}</td>

                                            <td>
                            <a class="btn btn-outline btn-xs btn-info" href="{{route('show.strip', ['id'=> $strip->id])}}">opis</a>
                            <a class="btn btn-outline btn-xs btn-success" href="{{route('edit.strip', ['id'=> $strip->id])}}">izmeni</a>
                            <button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$this_strip}}">obriši</button>
                            <form method="POST" action="{{route('delete.strip', ['id' => $this_strip])}}" id="delete:{{$this_strip}}">
                                {{ csrf_field() }} 
                            </form>
                                            </td>
                                        </tr>

                @include('partials.modals.modal-comic-delete')
                                                  
                                	@endforeach

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->


                             </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


        <hr>
        <h5><a href="{{route('create.strip')}}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;dodaj novi strip</a></h5>

                </div>
                <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
   
@endsection

@section('scripts')

<!-- DataTables JavaScript -->
<script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/datatables-responsive/dataTables.responsive.js') }}"></script>


<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true

        });
    });
    </script>

@endsection

