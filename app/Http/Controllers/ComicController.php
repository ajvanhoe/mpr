<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    
    public function index()
    {
       $stripovi = Comic::paginate(10);
       return view('stripovi')->with('stripovi', $stripovi);
    }

  
  
    public function show($id)
    {
        if(!$id) {
        return redirect('/stripovi')->with('error', 'Nepoznata knjiga!');
        }

           $strip = Comic::find($id);
           $slike = $strip->media;
           $naslovna = $slike->shift();

          return view('strip')->with('strip', $strip)->with('slike', $slike)->with('naslovna', $naslovna);
    }

   
}
