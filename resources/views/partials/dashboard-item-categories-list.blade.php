<ul>
@foreach($categories as $category)
   <strong>
      <a href="{{route('search.category', ['type'=> 'item', 'category' => $category->title])}}" target="__blank">
      	{{$category->title}}
      </a>
      </strong>

      <ul>
        @foreach($category->subcats()->get() as $subcat)
          <li>
          <a href="{{route('search.category', ['type'=> 'item', 'category' => $category->title, 'subcategory' => $subcat->title ])}}" target="__blank">
          	{{$subcat->title}}
          </a>
          </li>
        @endforeach
      </ul>
@endforeach
</ul>