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



class SearchController extends Controller
{
    

	public function search(Request $request) {

		$string = $request->input('string');

		//pretrazi albume
		$pretraga_albuma = Album::where('title', $string)->get();

		if($pretraga_albuma->isEmpty()){
			$albumi = null;
		} else {
			$albumi = $pretraga_albuma;
		}

		//pretrazi knjige
		$pretraga_knjiga = Book::where('title', $string)->get();

		if($pretraga_knjiga->isEmpty()){
			$knjige = null;
		} else {
			$knjige = $pretraga_knjiga;
		}

		//pretrazi stripove
		$pretraga_stripova = Comic::where('title', $string)->get();

		if($pretraga_stripova->isEmpty()){
			$stripovi = null;
		} else {
			$stripovi = $pretraga_stripova;
		}


		//vrati sve rezultate

		return view('search')->with('albumi', $albumi)->with('stripovi', $stripovi)->with('knjige', $knjige);





	}








}
