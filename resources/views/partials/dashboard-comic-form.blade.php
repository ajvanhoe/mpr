<div class="card border-dark ml-3 mb-3">
  <div class="card-header text-white bg-primary"><strong>Novi strip</strong></div>
  <div class="card-body">

<!-- <hr class="style13"> -->

<!-- Naziv  -->
<div class="form-group">
<input type="text" class="form-control" name="title"  value="{{$resource->title}}" form="create">
<p class="help-block"><small>naziv stripa</small></p>
</div>

<div class="form-group">
<input type="text" class="form-control" name="author"  value="{{$resource->author}}" form="create">
<p class="help-block"><small>autor</small></p>
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
      <form action="{{route('store.media.comic', ['id' => $new_resource->id])}}" class="dropzone" id="my-awesome-dropzone">{{ csrf_field() }}</form>
      <p class="help-block">maksimalna veličina pojedinačnog fajla: 1mb</p>
    </div>
  </div>
      
  <hr class="style13">

  <!-- DETALJI -->
 <h5 class="card-title mb-3"><a data-toggle="collapse" href="#collapse2">+ Dodaj detalje</a></h5>
  <div class="card-text collapse" id="collapse2">
  
  <!-- Izdavac -->        
  <div class="form-group">
    <input type="text" class="form-control col-md-8" value="{{$resource->publisher}}" name="publisher" form="create">
    <p class="help-block"><small>izdavač</small></p>
  </div>

  <!-- Stamparija -->        
  <div class="form-group">
    <input type="text" class="form-control col-md-8" value="{{$resource->press}}" name="press" form="create">
    <p class="help-block"><small>štamparija</small></p>
  </div>

  <!-- Tiraz -->
  <div class="form-group">
   <input type="number" min="" max="" class="form-control col-md-6" value="{{$resource->edition}}" name="edition" form="create">
   <p class="help-block"><small>tiraž</small></p>
  </div>

  <!-- Godina -->
  <div class="form-group">
    <input type="number" min="" max="" value="{{$resource->year}}" class="form-control col-md-6" name="year" form="create">
    <p class="help-block"><small>godina</small></p>
  </div>
  
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

  <form method="POST" action="{{route('store.comic', ['id' => $new_resource->id])}}" id="create">
        {{ csrf_field() }}  
    <span class="ml-3">
    <button type="submit" class="btn btn-lg btn-primary mr-3">Dodaj</button>
    <!-- <button type="reset" class="btn btn-danger">Reset</button>   -->
    </span>
  </form>  

  <div class="float-right"><a href="{{route('cancel')}}"><i class="fas fa-arrow-circle-right"></i>&nbsp;&nbsp;nazad</a></div>
            
  </div> <!-- /.card-body -->
</div> <!-- /.card -->