<div class="card border-dark mb-3">
  <div class="card-header text-white bg-primary"><strong>Slike</strong></div>
  <div class="card-body">


@foreach($resource->media as $media)
<img style="width: 175px; height: 125px" class="img-thumbnail mb-1" src="{{ asset('media/'.$type.'s/'.$media->file) }}">
						<!-- !!!! -->
<input type="checkbox" name="media[]" form="remedia" value="{{$media->id}}">
@endforeach

<hr class="style13">
    
  <form method="POST" action="{{route('remedia', ['id' => $resource->id, 'type' => $type])}}" id="remedia">
        {{ csrf_field() }}  
    <span class="ml-3">
      <button type="submit" class="btn btn-lg btn-danger mr-3">Ukloni</button>
    </span>  
  </form>  

            

  </div> <!-- /.card-body -->
</div> <!-- /.card -->