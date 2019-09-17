<div class="card border-dark mb-3">
  <div class="card-header text-white bg-primary"><strong>Dodaj</strong></div>
  <div class="card-body">
    <h5 class="card-title mb-3"><a data-toggle="collapse" href="#collapse1">+ Dodaj novu kategoriju</a></h5>
      <div class="card-text collapse" id="collapse1">
              
        <form method="POST" action="{{route('create.category.book')}}" id="addCategory">
          <div class="form-group">
            <input type="text" class="form-control" id="title" name="title" placeholder="naziv kategorije...">
          </div>
          <div class="form-group">
            {{ csrf_field() }}  
            <button type="submit" class="btn btn-primary">Dodaj</button>
          </div>
        </form>
              
        </div>

        <strong><hr></strong>

           
    <h5 class="card-title mb-3"><a data-toggle="collapse" href="#collapse2">+ Dodaj novu podkategoriju</a></h5>
      <div class="card-text collapse" id="collapse2">

        <form method="POST" action="{{route('create.subcategory.book')}}" id="addSubcategory">
          <div class="form-group">
           <input type="text" class="form-control" id="title" name="title" placeholder="naziv podkategorije...">
          </div>

          <div class="form-group">
            <label for="category">Kategorija:</label>
            <select name="category_id" class="form-control col-md-8" form="addSubcategory">
              <option value=""><em>izaberi kategoriju...</em></option>
              @foreach($categories as $category)
                <option value="{{$category->id}}" style="font-size: 15px;">  
                  {{$category->title}}
                </option> 
               @endforeach
             </select>
          <p class="help-block"><small>obavezna pripadajuća kategorija!</small></p> 
         </div>

              <div class="form-group">
                {{ csrf_field() }}  
                <button type="submit" class="btn btn-primary">Dodaj</button>
              </div>
            </form>
      </div>
            
  </div> <!-- /.card-body -->
</div> <!-- /.card -->