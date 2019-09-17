<div class="card border-light mb-3">
  <div class="card-header text-black bg-light"><strong>Knjige - kategorije</strong></div>
  <div class="card-body">

    <div class="row">
      <div class="col-md-10">

<ul>
@foreach($categories as $category)
  <?php $this_category = $category->id ?>
      <form method="POST" id="delete:{{$category->title}}" action="{{route('remove.category.book', ['id' => $this_category])}}">
        {{ csrf_field() }} 
      </form>

      <li>
       <strong>{{$category->title}}</strong>&nbsp;&nbsp;<button type="submit" form="delete:{{$category->title}}" class="btn btn-sm btn-link" onclick="confirm('ukloni?')">(delete)</button> 

        <ul>
            @foreach($category->subcats()->get() as $subcat)
                <?php $this_subcategory = $subcat->id ?>
        <form method="POST" id="delete:{{$subcat->title}}" action="{{route('remove.subcategory.book', ['id' => $this_subcategory])}}">
          {{ csrf_field() }} 
        </form>

          <li>
             {{$subcat->title}}
             <button type="submit" form="delete:{{$subcat->title}}" class="btn btn-sm btn-link" onclick="confirm('ukloni?')">(delete)</button> 
          </li>
            @endforeach
        </ul>
      </li>
@endforeach
</ul>
      </div>
    </div>

 </div> <!-- /.card-body -->
</div> <!-- /.card -->