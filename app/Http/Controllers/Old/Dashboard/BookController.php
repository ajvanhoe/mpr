<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Book as Book;

use App\BookCategory as Category;
use App\BookSubcategory as Subcategory;

class BookController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//



    public function create()
    {
       $categories = Category::all();
       return view('admin.book-create')->with('categories', $categories);
    }
 

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'     => 'required',
            'category'  => 'required'
            // 'author' => 'required'
        ]);

       
        $knjiga = Book::create($request->all());
        $id = $knjiga->id;

        //redirekt
        return redirect('/dashboard/knjige/'.$id.'/media')->with('success', 'Nova knjiga dodata!');
        
        
    }


    public function show($id=null)
    {

        if(!$id) {
            return redirect('/dashboard/knjige/index')->with('error', 'Nepoznata knjiga!');
        }

		$knjiga = Book::find($id);
        //dd($knjiga);
        $slike = $knjiga->media;
        $naslovna = $slike->shift();

        return view('admin.book')->with('knjiga', $knjiga)
        						  ->with('slike', $slike)
        						  ->with('naslovna', $naslovna);
       
    }



    public function edit($id=null)
    {
        if(!$id) {
            return redirect('/dashboard/knjige')->with('error', 'Nepoznata knjiga!');
        }

        $knjiga = Book::findOrFail($id);
        $categories = Category::all();

        $slike = $knjiga->media;

        $category = Category::where('title', $knjiga->category)->limit(1)->get()->shift();
        if ($category) {
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        } else {
           $subcategories = null; 
        } 
               
        return view('admin.book-edit')->with('knjiga', $knjiga)
                                       ->with('slike', $slike)
                                       ->with('categories', $categories)
                                       ->with('subcategories', $subcategories);
    }

     public function update(Request $request, $id)
    {

       // prebacuje $request u arej
       $input = $request->all(); 
     
       // knjiga i polja u tabeli
       $knjiga = Book::findOrFail($id);
       $db_fields = array_keys($knjiga->getAttributes()); 

       // moze i ovako
       //$fields = array_keys($album->getOriginal());

       // dodeljuje vrednosti
       foreach ($db_fields as $field) {
            if (array_key_exists($field, $input) && isset($input[$field])) {
                $knjiga->$field = $input[$field];
            }
        }

        //save
        $knjiga->save();
        
        //redirekt
        return redirect('/dashboard/knjige/create')->with('success', 'Izmene su sačuvane!');
    }


    public function destroy($id)
    {
        $knjiga = Book::findOrFail($id);
        $knjiga->delete();
        return redirect('/dashboard/knjige')->with('success', 'Knjiga je obrisana!');
        
    }







    
}
