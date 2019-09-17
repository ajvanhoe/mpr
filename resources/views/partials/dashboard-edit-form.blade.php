<div class="card border-dark ml-3 mb-3">
  <div class="card-header text-white bg-primary"><h3><strong>{{$resource->title}}</strong></h3></div>
  <div class="card-body">

<!-- <hr class="style13"> -->

<!-- Naziv  -->
<div class="form-group">
<input type="text" class="form-control" name="title"  value="{{$resource->title}}" form="edit">
<p class="help-block"><small>naziv</small></p>
</div>

  @if(array_key_exists('type', $db_fields))
  <!-- Tip -->
  <div class="form-group">
      <select name="type" class="form-control col-md-8" form="edit">
        <option value="" selected>odaberite tip...</option>
        <option value="Popunjen">Popunjen</option>
        <option value="Prazan">Prazan</option>
        <option value="Za popunjavanje">Za popunjavanje</option>
        <option value="Slabo popunjen">Slabo popunjen</option>
        <option value="Materijali">Materijali</option>
        <option value="Kesice">Kesice</option>
        <option value="Sličice">Sličice</option>
      </select>
      <p class="help-block"><small>tip</small></p>
  </div>
  @endif

@if(array_key_exists('author', $db_fields)) 
<div class="form-group">
<input type="text" class="form-control" name="author"  value="{{$resource->author}}" form="create">
<p class="help-block"><small>autor</small></p>
</div>
@endif

 <hr class="style13">

 <!-- Kategorija -->
 <div class="form-group">
  <select name="category" class="form-control col-md-8" form="edit">
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
    <select name="subcategory" class="form-control col-md-8" form="edit">
      <option value="nema" selected><em>odaberite podkategoriju...</em></option>
      @foreach($subcategories as $subcategory)     
        @if($subcategory->title === $resource->subcategory)
        <option value="{{$subcategory->title}}" selected>{{$subcategory->title}}</option>
        @else
        <option value="{{$subcategory->title}}">{{$subcategory->title}}</option>
        @endif 
      @endforeach
    </select>
    <p class="help-block"><small>podkategorija - opcionalno</small></p>
  </div>


  <hr class="style13">

  <!-- Slike -->
  <h5 class="card-title mb-3"><a data-toggle="collapse" href="#collapse1">+ Dodaj slike</a></h5>
  <div class="card-text collapse" id="collapse1">


    <!-- ovde slike -->

    <!-- <hr class="style13"> -->
    <div>
      <form action="{{route('store.media.'.$type, ['id' => $resource->id])}}" class="dropzone" id="my-awesome-dropzone">{{ csrf_field() }}</form>
      <p class="help-block">maksimalna veličina pojedinačnog fajla: 1mb</p>
    </div>
  </div>
      
  <hr class="style13">

  <!-- DETALJI -->
 <h5 class="card-title mb-3"><a data-toggle="collapse" href="#collapse2">+ Dodaj detalje</a></h5>
  <div class="card-text collapse" id="collapse2">

   @if(array_key_exists('publisher', $db_fields))
  <!-- Izdavac -->        
  <div class="form-group">
    <input type="text" class="form-control col-md-8" value="{{$resource->publisher}}" name="publisher" form="edit">
    <p class="help-block"><small>izdavač</small></p>
  </div>
  @endif

   @if(array_key_exists('press', $db_fields))
  <!-- Stamparija -->        
  <div class="form-group">
    <input type="text" class="form-control col-md-8" value="{{$resource->press}}" name="press" form="edit">
    <p class="help-block"><small>štamparija</small></p>
  </div>
  @endif

   @if(array_key_exists('edition', $db_fields))
  <!-- Tiraz -->
  <div class="form-group">
   <input type="number" min="" max="" class="form-control col-md-6" value="{{$resource->edition}}" name="edition" form="edit" value="">
   <p class="help-block"><small>tiraž</small></p>
  </div>
  @endif

  @if(array_key_exists('year', $db_fields))
  <!-- Godina -->
  <div class="form-group">
    <input type="number" min="" max="" value="{{$resource->year}}" class="form-control col-md-6" name="year" form="edit">
    <p class="help-block"><small>godina</small></p>
  </div>
  @endif

  <!-- Opis -->
  <div class="form-group">
   <textarea class="form-control col-md-10" rows="5" cols="20" name="description" form="edit">{{$resource->description}}</textarea>
    <p class="help-block"><small>opis</small></p>
  </div>

</div> <!-- /.card-text collapse -->

  <hr class="style13">

  <!-- Sifra -->
  <div class="form-group">
   <input type="text" min="" max="" class="form-control col-md-6" name="code" form="edit" value="{{$resource->code}}">
   <p class="help-block"><small>šifra</small></p>
  </div>
    
  <!-- Cena -->
  <div class="form-group">
    <input type="number" min="" max="" class="form-control col-md-6" name="price" form="edit" value="{{$resource->price}}">
    <p class="help-block"><small>cena</small></p>
  </div>

  <hr class="style13">

    
  <form method="POST" action="{{route('edit', ['type' => $type, 'id' => $resource->id])}}" id="edit">
        {{ csrf_field() }}  
    <span class="ml-3">
      <button type="submit" class="btn btn-lg btn-primary mr-3">Snimi izmene</button>
      <!-- <button type="reset" class="btn btn-danger">Reset</button>   -->
     </span>  
  </form>  


  </div> <!-- /.card-body -->
</div> <!-- /.card -->