<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Comic as Comic;
use App\ComicCategory as Category;
use App\ComicSubcategory as Subcategory;

class ComicController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//


    public function create()
    {
       $categories = Category::all();
       return view('admin.comic-create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' 	=> 'required',
			'category'  => 'required'
        ]);

       
        $strip = Comic::create($request->all());
        $id = $strip->id;

        //redirekt
		return redirect('/dashboard/stripovi/'.$id.'/media')->with('success', 'Novi strip dodat!');
		
		
    }


    public function show($id=null)
    {

        if(!$id) {
            return redirect('/dashboard/stripovi')->with('error', 'Nepoznat strip!');
        }

		$strip = Comic::find($id);
        $slike = $strip->media;
      
        $naslovna = $slike->shift();

        return view('admin.comic')->with('strip', $strip)->with('slike', $slike)->with('naslovna', $naslovna);
       
    }

    public function edit($id=null)
    {
        if(!$id) {
            return redirect('/dashboard/stripovi/index')->with('error', 'Nepoznat strip!');
        }

		$strip = Comic::findOrFail($id);
        $categories = Category::all();

        $slike = $strip->media;

        $category = Category::where('title', $strip->category)->limit(1)->get()->shift();
        if ($category) {
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        } else {
           $subcategories = null; 
        } 
               
      	return view('admin.comic-edit')->with('strip', $strip)
                                       ->with('slike', $slike)
                                       ->with('categories', $categories)
                                       ->with('subcategories', $subcategories);
    }

    public function update(Request $request, $id)
    {

       // prebacuje $request u arej
       $input = $request->all(); 
	 
       
	   $strip = Comic::findOrFail($id);
       $db_fields = array_keys($strip->getAttributes()); 

      

       // dodeljuje vrednosti
       foreach ($db_fields as $field) {
            if (array_key_exists($field, $input) && isset($input[$field])) {
                $strip->$field = $input[$field];
            }
        }

    	//save
		$strip->save();
		
		//redirekt
		return redirect('/dashboard/stripovi/create')->with('success', 'Strip je sačuvan!');
	}

	public function destroy($id)
    {
		$strip = Comic::findOrFail($id);
		$strip->delete();
		return redirect('/dashboard/stripovi')->with('success', 'Strip obrisan!');
		
    }

}
