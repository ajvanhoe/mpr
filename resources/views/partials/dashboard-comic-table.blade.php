<!-- DataTables -->
<div class="card border-dark mb-3">
  <div class="card-header text-white bg-primary"><i class="fas fa-table"></i>&nbsp;&nbsp;<strong>Stripovi - pregled</strong></div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

<thead>
      <tr>
        <th>Slika</th>
        <th>Strip</th>
        <th>Izdavač</th>
        <th>Kategorija</th>
        <th>Podkategorija</th>
        <th>Cena</th>
        <th>Šifra</th>
        <th>Opcije</th>
      </tr>
</thead>

<tfoot>
  <tr>
    <th>Slika</th>
    <th>Strip</th>
    <th>Izdavač</th>
    <th>Kategorija</th>
    <th>Podkategorija</th>
    <th>Cena</th>
    <th>Šifra</th>
    <th>Opcije</th>
   </tr>
</tfoot>

<tbody>
          

  @foreach($resources as $resource)

    <?php 
        $this_resource = $resource->id;
        $naslovna = $resource->media->shift();
    ?>
                    
                                  
    <tr>
          <td class="center">
            @if(isset($naslovna) && $naslovna !== null)
            <img style="width: 55px; height: 40px" class="img-thumbnail" src="{{asset('media/comics/'.$naslovna->file)}}">
            @else 
            <img style="width: 55px; height: 40px" class="img-thumbnail" src="{{ asset('images/blank.png') }}">
            @endif  
          </td>

          <td>
            <a href="{{route('show.comic', ['id' => $this_resource])}}" target="__blank">
            {{ $resource->title }}
            </a>
          </td>

          <td>{{ $resource->publisher }}</td>
          <td>{{ $resource->category }}</td>
          <td>{{ $resource->subcategory }}</td>
          <td class="center">{{ $resource->price }}</td>
          <td>{{ $resource->code }}</td>

     

  <td>
    <a class="btn btn-outline btn-xs btn-success" href="{{route('edit', ['type' => 'comic', 'id' => $resource->id])}}">izmeni</a>
    <button class="btn btn-outline btn-xs btn-danger" data-toggle="modal" data-target="#modal{{$this_resource}}">obriši</button>
    <form method="POST" action="{{route('remove.comic', ['id' => $this_resource])}}" id="delete:{{$this_resource}}">
      {{ csrf_field() }} 
    </form>
  </td>

    </tr>


<!-- Modal -->
<div class="modal fade" id="modal{{$this_resource}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Obriši strip?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       Da li želite da obrišete ovaj strip? <br>
       Nakon toga nije moguće povratiti obrisano.
      </div>
      <div class="modal-footer">
       
       <button type="button" class="btn btn-secondary" data-dismiss="modal">ipak ne...</button>
       <button type="submit" class="btn btn-primary btn-danger" form="delete:{{$this_resource}}">obriši</button>
    
      </div>
    </div>
  </div>
</div>

  @endforeach

</tbody>

      </table>
    </div>
  </div>
 <div class="card-footer small text-muted"><a href="{{route('create.comic')}}">+ dodaj novi strip</a></div>
</div>
