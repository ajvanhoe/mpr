<div class="card border-light mb-3">
  <div class="card-header text-black bg-light"><strong>Albumi - kategorije</strong></div>
  <div class="card-body">

    <div class="row">
      <div class="col-md-10">
<ul>
@foreach($categories as $category)
  <?php $this_category = $category->id ?>

      <form method="POST" id="delete:{{$category->title}}" action="{{route('remove.category.album', ['id' => $this_category])}}">
        {{ csrf_field() }} 
      </form>
            <li>
        <div class="row">
          <div class="col-md-8 mb-3">
              <strong>{{$category->title}}</strong>
              </div>
              <div class="col-md-4">
      <button type="submit" form="delete:{{$category->title}}" class="btn btn-danger btn-sm btn-circle-sm">x</button> 
              </div>
        </div>
        <div class="row">
          <ul>
            @foreach($category->subcats()->get() as $subcat)
                <?php $this_subcategory = $subcat->id ?>
        <form method="POST" id="delete:{{$subcat->title}}" action="{{route('remove.subcategory.album', ['id' => $this_subcategory])}}">
          {{ csrf_field() }} 
        </form>

              <li>
                <div class="row">
                <div class="col-md-8 mb-3">
                  {{$subcat->title}}
                </div>
                  <div class="col-md-4">
      <button type="submit" form="delete:{{$subcat->title}}" class="btn btn-danger btn-sm btn-circle-sm">x</button> 
              </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>


</li>
<hr>
@endforeach
</ul>

   </div>
    </div>

 </div> <!-- /.card-body -->
</div> <!-- /.card -->
