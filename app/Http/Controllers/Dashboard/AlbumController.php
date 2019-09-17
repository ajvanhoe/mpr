<?php

namespace App\Http\Controllers\Dashboard;

use App\Album as Album;
use App\AlbumMedia as Media;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//
	
	
     public function store(Request $request, $id) {
        $this->validate($request, [
            'title'     => 'required',
        ]);

        // prebacuje $request u arej
        $input = $request->all(); 

        $resource = Album::findOrFail($id);
        $db_fields = array_keys($resource->getAttributes()); 

       // moze i ovako
       //$fields = array_keys($album->getOriginal());

       // dodeljuje vrednosti
        foreach ($db_fields as $field) {
            if (array_key_exists($field, $input) && isset($input[$field])) {
                $resource->$field = $input[$field];
            }
        }

        //save
        $resource->save();
        return redirect('/dashboard/create/album/'.$resource->id)->with('success', 'Novi album je dodat!');
    }






    // edit

    // public function edit(Request $request, $id) {
    //      $this->validate($request, [
    //         'title'     => 'required',
    //     ]);

    //     // prebacuje $request u arej
    //     $input = $request->all(); 

    //     $resource = Album::findOrFail($id);
    //     $db_fields = array_keys($resource->getAttributes()); 

    //    // moze i ovako
    //    //$fields = array_keys($album->getOriginal());

    //    // dodeljuje vrednosti
    //     foreach ($db_fields as $field) {
    //         if (array_key_exists($field, $input) && isset($input[$field])) {
    //             $resource->$field = $input[$field];
    //         }
    //     }

    //     $resource->save();
    //     return redirect('/dashboard/albums/'.$resource->id)->with('success', 'Izmenjeno!');
    // }




    // delete

    public function destroy($id) {
        $album = Album::where('id', $id)->delete();
        $media = Media::where('album_id', $id)->get();

        foreach ($media as $entry) {
            $file_path = public_path('media/albums/'.$entry->file); 
            if(file_exists($file_path)) {unlink($file_path);}
            $entry->delete();
        }

        return redirect('/dashboard/albums')->with('success', 'Album je obrisan!');
    }


    /************************/




    // store media
    public function store_media(Request $request, $id)
    {
        $this->validate($request, [
            'file'  => 'image|nullable|max:1024'
        ]); 
      
        $media = new Media;

        if ($request->hasFile('file')) {

            // Get filename with the extension
            $fileNameWithExt = $request->file('file')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $ext = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $id.'-'.time().'-'.$filename.'.'.$ext;

            $request->file('file')->move('media/albums', $fileNameToStore);
            $media->file = $fileNameToStore;
        }

        $media->album_id = $id;
        $media->save();
    }




    // delete media
    // public function delete_media(Request $request) {


    // }



}
