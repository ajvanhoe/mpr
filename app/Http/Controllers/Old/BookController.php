<?php

namespace App\Http\Controllers;

use App\Book as Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
   
    public function index()
    {
       $knjige = Book::paginate(10);
       return view('knjige')->with('knjige', $knjige);
    }

  
    public function show($id)
    {
     
       if(!$id) {
        return redirect('/knjige')->with('error', 'Nepoznata knjiga!');
        }

           $knjiga = Book::find($id);
           $slike = $knjiga->media;
           $naslovna = $slike->shift();

          return view('knjiga')->with('knjiga', $knjiga)->with('slike', $slike)->with('naslovna', $naslovna);
       
    }
  
    
}
