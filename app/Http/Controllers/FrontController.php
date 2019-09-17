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

 /*** PUBLIC AREA ***/

class FrontController extends Controller
{
    

    // sve sto de na front mora da ima sve kategorije zbog navbara
    public function frontpage() {

        $album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();
        $categories = Category::all();

        return view('front')->with('album_categories', $album_categories)
                            ->with('book_categories', $book_categories)
                            ->with('comic_categories', $comic_categories)
                            ->with('categories', $categories);
    }

    // isto i za contact
    public function contact() {

        $album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();
        $categories = Category::all();

        return view('contact')->with('album_categories', $album_categories)
                              ->with('book_categories', $book_categories)
                              ->with('comic_categories', $comic_categories)
                              ->with('categories', $categories);
    }


    // index
    public function index($type) {
    	switch ($type) {
    		case 'knjige':
    			$resources = Book::paginate(10);
                $entype = 'book';
    			break;

    		case 'stripovi':
				$resources = Comic::paginate(10);  
                $entype = 'comic';
    			break;
    		
    		case 'albumi':
    			$resources = Album::paginate(10);
                $entype = 'album';
    			break;

    		case 'antikvarije':
    			$resources = Item::paginate(10);
                $entype = 'item';
    			break;
    				
    		default:
    			return redirect('/frontpage');
    			break;
    	}

    	$album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();
        $categories = Category::all();

        return view('items')->with('album_categories', $album_categories)
                            ->with('book_categories', $book_categories)
                            ->with('comic_categories', $comic_categories)
                            ->with('categories', $categories)
                            ->with('resources', $resources)
                            ->with('type', $type)->with('entype', $entype);

    }


    // show
    public function show($type, $id) {
    	switch ($type) {
    		case 'knjige':
    			$resource = Book::findOrFail($id);
                $entype = 'book';
    			break;

    		case 'stripovi':
				$resource = Comic::findOrFail($id);   
                $entype = 'comic'; 			
    			break;
    		
    		case 'albumi':
    			$resource = Album::findOrFail($id);
                $entype = 'album';
    			break;

    		case 'antikvarije':
    			$resource = Item::findOrFail($id);
                $entype = 'item';
    			break;
    				
    		default:
    			return redirect('/frontpage');
    			break;
    	}
 
     	$album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();
        $categories = Category::all();

        return view('item')->with('album_categories', $album_categories)
                            ->with('book_categories', $book_categories)
                            ->with('comic_categories', $comic_categories)
                            ->with('categories', $categories)
                            ->with('resource', $resource)
                            ->with('type', $type)->with('entype', $entype);

    }







}
