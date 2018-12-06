<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comic as Comic;
use App\ComicCategory as Category;
use App\ComicSubcategory as Subcategory;
use App\ComicMedia as Media;

class ComicMediaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//

    public function create($id=null)
    {
        
        if(!$id) {
            return redirect('/dashboard/stripovi')->with('error', 'Nepoznat strip!');
        }

        $strip = Comic::findOrFail($id);
        // promeniti ovo da ide preko id-a
        $category = Category::where('title', $strip->category)->get()->shift(); 
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        return view('admin.comic-media')->with('strip', $strip)->with('subcategories', $subcategories);
    }


    public function store(Request $request, $id)
    {
       $this->validate($request, [
            'file'  => 'image|nullable|max:1024'
        ]); 
      
    $strip = Comic::findOrFail($id);
    $media = new Media;

      if ($request->hasFile('file')) {

            // Get just extension
            $ext = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $strip->id . '-' . time() . '.' . $ext;

            $request->file('file')->move('media/stripovi', $fileNameToStore);
            $media->file = $fileNameToStore;
        }

        $media->comic_id = $id;
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
