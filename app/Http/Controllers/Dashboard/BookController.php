<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Book as Book;
use App\BookMedia as Media;

class BookController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//




    // store
    public function store(Request $request, $id) {
        $this->validate($request, [
            'title'     => 'required',
        ]);

        // prebacuje $request u arej
        $input = $request->all(); 

        $resource = Book::findOrFail($id);
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

        //$id = $resource->id;
        return redirect('/dashboard/create/book/')->with('success', 'Nova knjiga dodata!');
    }




    // delete

    public function destroy($id) {
        $book = Book::where('id', $id)->delete();
        $media = Media::where('book_id', $id)->get();

        foreach ($media as $entry) {
            $file_path = public_path('media/books/'.$entry->file); 
            if(file_exists($file_path)) {unlink($file_path);}
            $entry->delete();
        }

        return redirect('/dashboard/books')->with('success', 'Knjiga je obrisana!');
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

            $request->file('file')->move('media/books', $fileNameToStore);
            $media->file = $fileNameToStore;
        }

        $media->book_id = $id;
        $media->save();
    }







    
}
