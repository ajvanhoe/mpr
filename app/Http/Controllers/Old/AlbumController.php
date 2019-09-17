<?php

namespace App\Http\Controllers;

use App\Album as Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
	
		
    public function index()
    {
		$albumi = Album::paginate(10);
        return view('albumi')->with('albumi', $albumi);
    }

 

    
    public function show($id=null)
    {

     if(!$id) {
        return redirect('/albumi')->with('error', 'Nepoznat album!');
     }

  	       $album = Album::find($id);
           $slike = $album->media;
           $naslovna = $slike->shift();

          return view('album')->with('album', $album)->with('slike', $slike)->with('naslovna', $naslovna);
       
    }

  
    public function search($string) {


    }

}
