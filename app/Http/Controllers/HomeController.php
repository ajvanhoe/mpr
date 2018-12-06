<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// modeli
use App\Album as Album;
use App\AlbumMedia as AlbumMedia;

use App\Book as Book;
use App\BookMedia as BookMedia;

use App\Comic as Comic;
use App\ComicMedia as ComicMedia;

// kategorije
use App\AlbumCategory as AlbumCategory;
use App\BookCategory as BookCategory;
use App\ComicCategory as ComicCategory;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**********************************************************************/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $albumi = Album::orderBy('created_at','desc')->limit(10)->get();
        $knjige = Book::orderBy('created_at','desc')->limit(10)->get();
        $stripovi = Comic::orderBy('created_at','desc')->limit(10)->get();

        return view('admin.dashboard')->with('albumi', $albumi)
                                      ->with('knjige', $knjige)
                                      ->with('stripovi', $stripovi);
    }

    // podesavanja
    // public function settings() {
    //     return view('admin.settings');
    // }

    // kategorije
    
    public function categories() {

        $album_categories = AlbumCategory::all();
        $book_categories = BookCategory::all();
        $comic_categories = ComicCategory::all();

        return view('admin.categories')->with('album_categories', $album_categories)->with('book_categories', $book_categories)->with('comic_categories', $comic_categories);
    }    


    // albumi 
    public function albumi()
    {
        $albumi = Album::orderBy('title')->get();
        return view('admin.album-index')->with('albumi', $albumi);
    }


    //knjige
    public function knjige()
    {
        $knjige = Book::orderBy('title')->get();
        return view('admin.book-index')->with('knjige', $knjige);
    }

    //stripovi
    public function stripovi()
    {
        $stripovi = Comic::orderBy('title')->get();
        return view('admin.comic-index')->with('stripovi', $stripovi);
    }









}
