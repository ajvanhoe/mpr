
<!-- Search Widget -->
<div class="card mb-4">
  <h5 class="card-header">Pretraga</h5>
  <div class="card-body">
    <div class="input-group">
   
      <input type="text" name="string" class="form-control"  form="search" placeholder="Pretraga...">
      <span class="input-group-btn">
         <form id="search" method="POST" action="{{route('search.string', ['type' => $type])}}">
             <button class="btn btn-secondary" form="search" type="submit">Go!</button>
          {{ csrf_field() }}
          </form> 
      </span>
      
    </div>
 
  </div>
</div>

@if(isset($page_categories))
<!-- Categories Widget -->
<div class="card my-4">
  <h5 class="card-header">Kategorije</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-lg-8">
        <ul class="list-unstyled  ml-4 mb-0">
            @foreach($page_categories as $page_category)
               <li>
                  <strong>
                  <a href="{{route('search.category', ['type'=> $type, 'category' => $page_category->title])}}">
                    {{$page_category->title}}
                  </a>
                  </strong>

                  <ul>
                    @foreach($page_category->subcats()->get() as $subcat)
                      <li>
                      <a href="{{route('search.category', ['type'=> $type, 'category' => $page_category->title, 'subcategory' => $subcat->title ])}}">
                        {{$subcat->title}}
                      </a>
                      </li>
                    @endforeach
                  </ul>
                </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>

@endif

<!-- Side Widget -->

<!-- 
<div class="card my-4">
  <h5 class="card-header">Side Widget</h5>
  <div class="card-body">
    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
  </div>
</div> -->