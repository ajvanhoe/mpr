<?php

namespace App\Http\Controllers\Dashboard;

use App\BookMedia as Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Book as Book;

use App\BookCategory as Category;
use App\BookSubcategory as Subcategory;


class BookMediaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//


    public function create($id=null)
    {
        
        if(!$id) {
            return redirect('/dashboard/knjige')->with('error', 'Nepoznata knjiga!');
        }

        $knjiga = Book::findOrFail($id);
        // promeniti ovo da ide preko id-a
        $category = Category::where('title', $knjiga->category)->get()->shift(); 
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        return view('admin.book-media')->with('knjiga', $knjiga)->with('subcategories', $subcategories);
    }


    public function store(Request $request, $id)
    {
       $this->validate($request, [
            'file'  => 'image|nullable|max:1024'
        ]); 
      
    $knjiga = Book::findOrFail($id);
    
    $media = new Media;

      if ($request->hasFile('file')) {

            // Get filename with the extension
            //$fileNameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            //$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $ext = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $knjiga->id . '-' . time() . '.' . $ext;

            $request->file('file')->move('media/knjige', $fileNameToStore);
            $media->file = $fileNameToStore;
        }

        $media->book_id = $id;
        $media->save();
    }

    public function destroy($id)
    {

        $origin_link = $_SERVER['HTTP_REFERER'];

        $media = Media::findOrFail($id);
        $media->delete();
        // dodati da obrise i sam fajl 
        
        return redirect($origin_link)->with('success', 'Slika obrisana!');
    }



}
