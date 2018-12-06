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
       	<!-- <h3 class="page-header">Albumi - pregled svih albuma</h3> -->
        <hr>
		  

        <ol class="breadcrumb" style="text-align:center;">
            <li>
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i>  Naslovna</a>
            </li>
            <li>
                <i class="fa fa-th"></i>  Albumi
            </li>
            <li class="active">
                <i class="fa fa-th-list"></i> Pregled albuma
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
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <strong>Albumi - pregled svih albuma</strong>
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
    	

    	<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                    	<th>Slika</th>
                                        <th>Album</th>
										<th>Tip</th>
                                        <th>Cena</th>
                                        <th>Izdavač</th>
                                        <th>Žanr</th>
                                        <th>Kategorija</th>
                                        <th>Opcije</th>
                                        
                                    </tr>
                                </thead>


                                <tbody>

                                	@foreach($albumi as $album)

                                           <?php 
                                            $this_album = $album->id;
                                            $naslovna = $album->media->shift();
                                            
                                            ?>
                    
                                	
                                		<tr>
                                			<td class="center">
                                			@if(isset($naslovna) && $naslovna !== null)
											<!-- <img style="width: 55px; height: 40px" class="img-thumbnail" src="/media/albumi/{{$naslovna->file}}"> -->

                                             <img style="width: 55px; height: 40px" class="img-thumbnail" src="{{asset('media/albumi/'.$naslovna->file)}}">
											@else	
											<img style="width: 55px; height: 40px" class="img-thumbnail" src="{{ asset('media/blank.png') }}">
											@endif	
                                			</td>
                                			<td>
                                				<a href="{{route('show.album', ['id' => $this_album])}}">
                                				{{ $album->title }}
                                				</a>
                                			</td>

                                			<td class="center">{{ $album->type }}</td>
                                			<td class="center">{{ $album->price }}</td>

                                			<td>{{ $album->publisher }}</td>
                                			<td>{{ $album->category }}</td>
                                			<td>{{ $album->subcategory }}</td>

                                            <td>
                            <a class="btn btn-outline btn-xs btn-info" href="{{route('show.album', ['id' => $album->id])}}">opis</a>
                            <a class="btn btn-outline btn-xs btn-success" href="{{route('edit.album', ['id' => $album->id])}}">izmeni</a>
                            <button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$this_album}}">obriši</button>
                            <form method="POST" action="{{route('delete.album', ['id' => $this_album])}}" id="delete:{{$this_album}}">
                                {{ csrf_field() }} 
                            </form>
                                            </td>
                                        </tr>

<!-- Modal -->
<div class="modal fade" id="modal{{$this_album}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Obriši album?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Da li želite da obrišete ovaj album? <br>
       Nakon toga nije moguće povratiti obrisano.
      </div>
      <div class="modal-footer">
       
       <button type="button" class="btn btn-secondary" data-dismiss="modal">ipak ne...</button>
        <button type="submit" class="btn btn-primary btn-danger" form="delete:{{$this_album}}">obriši</button>
    
      </div>
    </div>
  </div>
</div>
                                                  
                                	@endforeach

                                </tbody>
                            </table>
                            <!-- /.table-responsive -->


                             </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->


        <hr>
        <h5><a href="{{route('create.album')}}"><i class="fa fa-plus-circle"></i>&nbsp;&nbsp;dodaj novi album</a></h5>

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

