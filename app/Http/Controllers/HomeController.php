<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Modeli
use App\Album as Album;
use App\AlbumMedia as AlbumMedia;

use App\Book as Book;
use App\BookMedia as BookMedia;

use App\Comic as Comic;
use App\ComicMedia as ComicMedia;

use App\Item as Item;
use App\Media as Media;

// Kategorije i podkategorije
use App\AlbumCategory as AlbumCategory;
use App\AlbumSubcategory as AlbumSubcategory;

use App\BookCategory as BookCategory;
use App\BookSubcategory as BookSubcategory;

use App\ComicCategory as ComicCategory;
use App\ComicSubcategory as ComicSubcategory;

use App\Category as Category;
use App\Subcategory as Subcategory;

/***   Kontroler  ***/

class HomeController extends Controller
{


    /*** PUBLIC AREA ***/

    // sve sto de na front mora da ima sve kategorije zbog navbara
    // public function frontpage() {

    //     $album_categories = AlbumCategory::all();
    //     $book_categories = BookCategory::all();
    //     $comic_categories = ComicCategory::all();
    //     $categories = Category::all();

    //     return view('front')->with('album_categories', $album_categories)
    //                         ->with('book_categories', $book_categories)
    //                         ->with('comic_categories', $comic_categories)
    //                         ->with('categories', $categories);
    // }

    // public function contact() {

    //     $album_categories = AlbumCategory::all();
    //     $book_categories = BookCategory::all();
    //     $comic_categories = ComicCategory::all();
    //     $categories = Category::all();

    //     return view('contact')->with('album_categories', $album_categories)
    //                           ->with('book_categories', $book_categories)
    //                           ->with('comic_categories', $comic_categories)
    //                           ->with('categories', $categories);
    // }





    /*** AUTH AREA ***/


    // main panel
    public function dashboard()
    {
        $albums = Album::orderBy('created_at','desc')->limit(5)->get();
        $books = Book::orderBy('created_at','desc')->limit(5)->get();
        $comics = Comic::orderBy('created_at','desc')->limit(5)->get();  
        $items = Item::orderBy('created_at','desc')->limit(10)->get();  

      return view('admin.dashboard')->with('albums', $albums)
                                    ->with('books', $books)
                                    ->with('comics', $comics)
                                    ->with('items', $items);
    }


     /********  CATEGORIES *********/

    // main categories panel
    public function categories()
    {
        $album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();
        $categories = Category::all();

        return view('admin.categories')->with('album_categories', $album_categories)
                                       ->with('book_categories', $book_categories)
                                       ->with('comic_categories', $comic_categories)
                                       ->with('categories', $categories);
    }

    // book categories panel
    public function book_categories()
    {
       $categories = BookCategory::all(); 
       return view('admin.book-categories')->with('categories', $categories);
    }    

    // comic categories panel
    public function comic_categories()
    {
       $categories = ComicCategory::all(); 
       return view('admin.comic-categories')->with('categories', $categories);
    }    
    
    // album categories panel
    public function album_categories()
    {
       $categories = AlbumCategory::all(); 
       return view('admin.album-categories')->with('categories', $categories);
    }    

    // Item categories panel
    public function item_categories()
    {
       $categories = Category::all(); 
       return view('admin.item-categories')->with('categories', $categories);
    }    


    /*********** ITEMS ***********/


    // albums
    public function album($id=null) {
        // vraca ceo spisak ako nema id
        if(!$id) {
            $resources = Album::orderBy('title')->get();
            return view('admin.album-index')->with('resources', $resources);
        } else {
            return redirect('/prodavnica/albumi/prikaz/'.$id);
        }

    }

    public function add_album($id=null) {

        $categories = AlbumCategory::all();
        $subcategories = AlbumSubcategory::orderBy('category_id')->get();
        
        $new_resource = Album::create([
                'title'       => 'novi album',
                'description' => 'nema'
        ]);

        if($id) {
          $resource = Album::find($id);
        } else {
          $resource = $new_resource;  
        }


         return view('admin.album-create')->with('categories', $categories)
                                         ->with('subcategories', $subcategories)
                                         ->with('resource', $resource)
                                         ->with('new_resource', $new_resource);
    }

    // books
    public function book($id=null)
    {
        if(!$id) {
            $resources = Book::orderBy('title')->get();
            return view('admin.book-index')->with('resources', $resources);
        } else {
          return redirect('/prodavnica/knjige/prikaz/'.$id);
        }

    }

    public function add_book($id=null) {

        // junk
        //$junk = Book::where('title', 'nova knjiga')->delete();

        $categories = BookCategory::all();
        $subcategories = BookSubcategory::orderBy('category_id')->get();
       
            $new_resource = Book::create([
                'title'       => 'nova knjiga',
                'description' => 'nema'
            ]);
       

        if($id) {
          $resource = Book::find($id);
        } else {
          $resource = $new_resource;  
        }

        return view('admin.book-create')->with('categories', $categories)
                                        ->with('subcategories', $subcategories)
                                        ->with('resource', $resource)
                                        ->with('new_resource', $new_resource);
    }


    // comics
    public function comic($id=null)
    {
        if(!$id) {
            $resources = Comic::orderBy('title')->get();
            return view('admin.comic-index')->with('resources', $resources);
        } else {
            return redirect('/prodavnica/stripovi/prikaz/'.$id);
        }
    }

    public function add_comic($id=null) {

        // junk
        // $junk = Comic::where('title', 'novi strip')->delete();

        $categories = ComicCategory::all();
        $subcategories = ComicSubcategory::orderBy('category_id')->get();
       
        $new_resource = Comic::create([
                'title'       => 'novi strip',
                'description' => 'nema'
        ]);

        if($id) {
          $resource = Comic::find($id);
        } else {
          $resource = $new_resource;  
        }

       
        return view('admin.comic-create')->with('categories', $categories)
                                         ->with('subcategories', $subcategories)
                                         ->with('resource', $resource)
                                         ->with('new_resource', $new_resource);
    }



    // items
    public function item($id=null)
    {
        if(!$id) {
            $resources = Item::orderBy('title')->get();
            return view('admin.item-index')->with('resources', $resources);
        } else {
            return redirect('/prodavnica/antikvarije/prikaz/'.$id);
        }
    }


    public function add_item($id=null) {

        $categories = Category::all();
        $subcategories = Subcategory::orderBy('category_id')->get();

        $new_resource = Item::create([
                'title'       => 'novi unos',
                'description' => 'nema'
        ]);

        if($id) {
            $resource = Item::find($id);
        } else {
            $resource = $new_resource;
        }

        return view('admin.item-create')->with('categories', $categories)
                                         ->with('subcategories', $subcategories)
                                         ->with('resource', $resource)
                                         ->with('new_resource', $new_resource);
    }



    /*** Additonal functions ***/

    // redosled varijabla mora da prati rutu u ruteru
    public function edit($type, $id) {

        switch ($type) {
            case 'album':
                $categories = AlbumCategory::all();
                $subcategories = AlbumSubcategory::orderBy('category_id')->get();
                $resource = Album::findOrFail($id);
            break;
            case 'comic':
                $categories = ComicCategory::all();
                $subcategories = ComicSubcategory::orderBy('category_id')->get();
                $resource = Comic::findOrFail($id);
            break;
            case 'book':
                $categories = BookCategory::all();
                $subcategories = BookSubcategory::orderBy('category_id')->get();
                $resource = Book::findOrFail($id);
            break;
            case 'item':
                $categories = Category::all();
                $subcategories = Subcategory::orderBy('category_id')->get();
                $resource = Item::findOrFail($id);
            break;
            
            default:
                //dd($id);
                return redirect('/frontpage');
            break;
        }

         $db_fields = array_keys($resource->getAttributes()); 
         $flipped = array_flip( $db_fields );
         return view('admin.edit')->with('categories', $categories)
                                  ->with('subcategories', $subcategories)
                                  ->with('resource', $resource)
                                  ->with('type', $type)
                                  ->with('db_fields', $flipped);

    }


    public function update(Request $request, $type, $id) {

        $this->validate($request, [
            'title'     => 'required',
        ]);

        // prebacuje $request u arej
        $input = $request->all(); 

       // dd($type);

        switch ($type) {
            case 'book':
                  $resource = Book::findOrFail($id);
                break;
            case 'comic':
                  $resource = Comic::findOrFail($id);
                break;
            case 'album':
                  $resource = Album::findOrFail($id);
                break;
            case 'item':
                  $resource = Item::findOrFail($id);
                break;
            
            default:
                return redirect('/frontpage');
                break;
        }
        
        $db_fields = array_keys($resource->getAttributes()); 

        // dodeljuje vrednosti
        foreach ($db_fields as $field) {
            if (array_key_exists($field, $input) && isset($input[$field])) {
                $resource->$field = $input[$field];
            }
        }
        // save & redirect
        $resource->save();
        return redirect('/dashboard/'.$type.'s/')->with('success', 'Izmenjeno!');

    }


    public function remove_media(Request $request, $type, $id) {

       // dd($type);
        
        $origin_link = $_SERVER['HTTP_REFERER'];

        switch ($type) {
            case 'book':
                foreach($request->media as $pic){
                $remove = BookMedia::find($pic);
                $file_path = public_path('media/books/'.$remove->file); 
                if(file_exists($file_path)) {unlink($file_path);}
                $remove->delete();

                }

                break;
            case 'comic':
                foreach($request->media as $pic){
                $remove = ComicMedia::find($pic);
                $file_path = public_path('media/comics/'.$remove->file); 
                if(file_exists($file_path)) {unlink($file_path);}
                $remove->delete();
                 } 
                break;
            case 'album':
                foreach($request->media as $pic){
                $remove = AlbumMedia::find($pic);
                $file_path = public_path('media/albums/'.$remove->file); 
                if(file_exists($file_path)) {unlink($file_path);}
                $remove->delete();
                }
                break;
            case 'item':
                foreach($request->media as $pic){
                $remove = Media::find($pic);
                $file_path = public_path('media/items/'.$remove->file); 
                if(file_exists($file_path)) {unlink($file_path);}
                $remove->delete();
                }
                break;
            
            default:
                return redirect('/frontpage');
                break;
      }
        return redirect($origin_link)->with('success', 'Obrisano!');
    }

    // deletes all the junk from add method
    public function cancel(){
        $album_junk = Album::where('title', 'novi album')->delete();
        $book_junk = Book::where('title', 'nova knjiga')->delete();
        $comic_junk = Comic::where('title', 'novi strip')->delete();
        $item_junk = Item::where('title', 'novi unos')->delete();

        return redirect('/dashboard');
    }

















}
