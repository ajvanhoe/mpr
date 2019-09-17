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


class SearchController extends Controller
{
    


	public function search (Request $request, $type) {

		$string = $request->input('string');

		// dodati trim

		switch ($type) {
			case 'album':
				$results = Album::where('title', $string)->get();
				break;

			case 'book':
				$results = Book::where('title', $string)->get();
				break;

			case 'comic':
				$results = Comic::where('title', $string)->get();
				break;

			case 'item':
				$results = Item::where('title', $string)->get();
				break;
			
			default:
				return redirect('/front');
				break;
		}

		$album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();
        $categories = Category::all();

		return view('search')->with('type', $type)
							 ->with('results', $results)
							 // categories
							 ->with('album_categories', $album_categories)
							 ->with('book_categories', $book_categories)
	                         ->with('comic_categories', $comic_categories)
	                         ->with('categories', $categories);
	}


	// funkcija dobija tip ($type) na osnovu koga odredjuje kroz switch koji model da koristi
	// copy-paste kod ali mrzi me da mozgam dalje :)
	// u slucaju da nema podkategorije izvadice sve rezultate iz pripadajuce kategorije
	
	public function searchByCategory ($type, $category, $subcategory=null) {

		switch ($type) {
			case 'album':
				if($subcategory) {
					$results = Album::where('subcategory', $subcategory)->paginate(15);
				} else {
					$results = Album::where('category', $category)->paginate(15);
				}

				$title = 'Albumi';
				$page_categories = AlbumCategory::all();
			break;
			
			
			case 'book':
				if($subcategory) {
					$results = Book::where('subcategory', $subcategory)->paginate(15);
				} else {
					$results = Book::where('category', $category)->paginate(15);
				}

				$title = 'Knjige';
				$page_categories = BookCategory::all();
				break;

			case 'comic':
				if($subcategory) {
					$results = Comic::where('subcategory', $subcategory)->paginate(15);
				} else {
					$results = Comic::where('category', $category)->paginate(15);
				}

				$title = 'Stripovi';
				$page_categories = ComicCategory::all();
				break;

			case 'item':
				if($subcategory) {
					$results = Item::where('subcategory', $subcategory)->paginate(15);
				} else {
					$results = Item::where('category', $category)->paginate(15);
				}

				$title = 'Kolekcionarstvo';
				$page_categories = Category::all();
				break;
			
			default:
				return redirect('/front');
				break;
				
		}

		$page = [
			'title' 		=> $title,
			'category' 		=> $category,
			'subcategory' 	=> $subcategory
		];


		$album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();
        $categories = Category::all();

		return view('search')->with('type', $type)
							 ->with('page', $page)
							 ->with('page_categories', $page_categories)
							 ->with('results', $results)
							 // categories
							 ->with('album_categories', $album_categories)
							 ->with('book_categories', $book_categories)
                             ->with('comic_categories', $comic_categories)
                             ->with('categories', $categories);

	}





}
