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
                <i class="fa fa-th"></i>  Knjige
            </li>
            <li class="active">
                <i class="fa fa-th-list"></i> Pregled knjiga
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
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <strong>Knjige - pregled svih knjiga</strong>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
    	

    	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    	<th>Slika</th>
                                        <th>Knjiga</th>
										<th>Autor</th>
                                        <th>Cena</th>
                                        <th>Izdavač</th>
                                        <th>Žanr</th>
                                        <th>Kategorija</th>
                                        <th>Opcije</th>
                                        
                                    </tr>
                                </thead>


                                <tbody>

                                	@foreach($knjige as $knjiga)

                                           <?php 
                                            $this_knjiga = $knjiga->id;
                                            $naslovna = $knjiga->media->shift();
                                            
                                            ?>
                    
                                	
                                		<tr>
                                			<td class="center">
                                			@if(isset($naslovna) && $naslovna !== null)
											<!-- <img style="width: 55px; height: 40px" class="img-thumbnail" src="/media/knjige/{{$naslovna->file}}"> -->
                                            <img style="width: 55px; height: 40px" class="img-thumbnail" src="{{asset('media/knjige/'.$naslovna->file)}}">
											@else	
											<img style="width: 55px; height: 40px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
											@endif	
                                			</td>
                                			<td>
                                				<a href="{{route('show.knjiga', ['id'=> $knjiga->id])}}">
                                				{{ $knjiga->title }}
                                				</a>
                                			</td>

                                			<td class="center">{{ $knjiga->author }}</td>
                                			<td class="center">{{ $knjiga->price }}</td>

                                			<td>{{ $knjiga->publisher }}</td>
                                			<td>{{ $knjiga->category }}</td>
                                			<td>{{ $knjiga->subcategory }}</td>

                                            <td>
                            <a class="btn btn-outline btn-xs btn-info" href="{{route('show.knjiga', ['id'=> $knjiga->id])}}">opis</a>
                            <a class="btn btn-outline btn-xs btn-success" href="{{route('edit.knjiga', ['id' => $knjiga->id])}}">izmeni</a>
                            <button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$this_knjiga}}">obriši</button>
                            <form method="POST" action="{{route('delete.knjiga', ['id' => $this_knjiga])}}" id="delete:{{$this_knjiga}}">
                                {{ csrf_field() }} 
                            </form>
                                            </td>
                                        </tr>

                @include('partials.modals.modal-book-delete')
                                                  
                                	@endforeach

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->


                             </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


        <hr>
        <h5><a href="{{route('create.knjiga')}}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;dodaj novu knjigu</a></h5>

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

