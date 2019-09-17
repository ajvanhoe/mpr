<div class="card border-dark ml-3 mb-3">
  <div class="card-header text-white bg-primary"><strong>Novi artikal</strong></div>
  <div class="card-body">

<!-- <hr class="style13"> -->

<!-- Naziv  -->
<div class="form-group">
<input type="text" class="form-control" name="title"  value="{{$resource->title}}" form="create">
<p class="help-block"><small>naziv artikla</small></p>
</div>

 <hr class="style13">

 <!-- Kategorija -->
 <div class="form-group">
  <select name="category" class="form-control col-md-8" form="create">
    <option value="nema">odaberite kategoriju...</option>
       @foreach($categories as $category)
        @if($category->title === $resource->category)
        <option value="{{$category->title}}" selected>{{$category->title}}</option>
        @else
        <option value="{{$category->title}}">{{$category->title}}</option>
        @endif
       @endforeach
    </select>
    <p class="help-block"><small>kategorija</small></p>
  </div>

  <!-- Dodati podkategoriju! -->
  <div class="form-group">
    <select name="subcategory" class="form-control col-md-8" form="create">
      <option value="nema" selected><em>odaberite podkategoriju...</em></option>
      @foreach($subcategories as $subcategory)      
      <option value="{{$subcategory->title}}">{{$subcategory->title}}</option>
      @endforeach
    </select>
    <p class="help-block"><small>podkategorija - opcionalno</small></p>
  </div>


  <hr class="style13">

  <!-- Slike -->
  <h5 class="card-title mb-3"><a data-toggle="collapse" href="#collapse1">+ Dodaj slike</a></h5>
  <div class="card-text collapse" id="collapse1">
    <div>
      <form action="{{route('store.media.item', ['id' => $new_resource->id])}}" class="dropzone" id="my-awesome-dropzone">{{ csrf_field() }}</form>
      <p class="help-block">maksimalna veličina pojedinačnog fajla: 1mb</p>
    </div>
  </div>
      
  <hr class="style13">

  <!-- DETALJI -->
 <h5 class="card-title mb-3"><a data-toggle="collapse" href="#collapse2">+ Dodaj detalje</a></h5>
  <div class="card-text collapse" id="collapse2">
  
  <!-- Opis -->
  <div class="form-group">
   <textarea class="form-control col-md-10" rows="5" cols="20" name="description" form="create">{{$resource->description}}</textarea>
    <p class="help-block"><small>opis</small></p>
  </div>

</div> <!-- /.card-text collapse -->

  <hr class="style13">

  <!-- Sifra -->
  <div class="form-group">
   <input type="text" min="" max="" class="form-control col-md-6" name="code" form="create">
   <p class="help-block"><small>šifra</small></p>
  </div>
    
  <!-- Cena -->
  <div class="form-group">
    <input type="number" min="" max="" class="form-control col-md-6" name="price" form="create">
    <p class="help-block"><small>cena</small></p>
  </div>

  <hr class="style13">

  
    <form method="POST" action="{{route('store.item', ['id' => $new_resource->id])}}" id="create">
      <span class="ml-3">
          {{ csrf_field() }}  
      <button type="submit" class="btn btn-lg btn-primary mr-3">Dodaj</button>
      <!-- <button type="reset" class="btn btn-danger">Reset</button>   -->
      </span>
    </form>  


  
  <br>
  <div class="float-right"><a href="{{route('cancel')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad</a></div>
            
  </div> <!-- /.card-body -->
</div> <!-- /.card -->