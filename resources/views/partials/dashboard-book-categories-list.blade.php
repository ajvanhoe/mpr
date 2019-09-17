<ul>
@foreach($book_categories as $category)
   <li>
      <strong>
      <a href="{{route('search.category', ['type'=> 'book', 'category' => $category->title])}}" target="__blank">
      	{{$category->title}}
      </a>
      </strong>

      <ul>
        @foreach($category->subcats()->get() as $subcat)
          <li>
          <a href="{{route('search.category', ['type'=> 'book', 'category' => $category->title, 'subcategory' => $subcat->title ])}}" target="__blank">
          	{{$subcat->title}}
          </a>
          </li>
        @endforeach
      </ul>

    </li>
@endforeach
</ul>