<?php

namespace App\Http\Controllers\Dashboard;

use App\AlbumMedia as Media;
use App\Album as Album;

use App\AlbumCategory as Category;
use App\AlbumSubcategory as Subcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumMediaController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id=null)
    {
        
        if(!$id) {
            return redirect('/dashboard/albumi')->with('error', 'Nepoznat album!');
        }

        $album = Album::findOrFail($id);
        // promeniti ovo da ide preko id-a
        $category = Category::where('title', $album->category)->get()->shift(); 
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        return view('admin.album-media')->with('album', $album)->with('subcategories', $subcategories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
       $this->validate($request, [
            'file'  => 'image|nullable|max:1024'
        ]); 
      
    $album = Album::findOrFail($id);
    
    $media = new Media;

      if ($request->hasFile('file')) {

            // Get filename with the extension
            //$fileNameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            //$filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $ext = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $album->id . '-' . time() . '.' . $ext;

            $request->file('file')->move('media/albumi', $fileNameToStore);
            $media->file = $fileNameToStore;
        }

        $media->album_id = $id;
        $media->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlbumMedia  $albumMedia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $origin_link = $_SERVER['HTTP_REFERER'];

        $media = Media::findOrFail($id);
        $media->delete();
        // dodati da obrise i sam fajl 
        
        return redirect($origin_link)->with('success', 'Slika obrisana!');
    }
}
