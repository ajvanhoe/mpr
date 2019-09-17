<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comic as Comic;
use App\ComicMedia as Media;

class ComicController extends Controller
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

        $resource = Comic::findOrFail($id);
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

        $id = $resource->id;
        return redirect('/dashboard/create/comic/'.$id)->with('success', 'Novi strip je dodat!');
    }



    // edit



    // delete

    public function destroy($id) {
        $comic = Comic::where('id', $id)->delete();
        $media = Media::where('comic_id', $id)->get();

        foreach ($media as $entry) {
            $file_path = public_path('media/comics/'.$entry->file); 
            if(file_exists($file_path)) {unlink($file_path);}
            $entry->delete();
        }

        return redirect('/dashboard/comics')->with('success', 'Strip je obrisan!');
    }





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

            $request->file('file')->move('media/comics', $fileNameToStore);
            $media->file = $fileNameToStore;
        }

        $media->comic_id = $id;
        $media->save();
    }













}
