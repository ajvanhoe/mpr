<?php

namespace App\Http\Controllers\Dashboard;

use App\Album as Album;
use App\AlbumCategory as Category;
use App\AlbumSubcategory as Subcategory;
//use App\AlbumMedia as Media;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumController extends Controller
{
	
	public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//
	
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		//$albumi = Album::all();
        //$albumi = Album::orderBy('title', 'asc')->get();
        //return view('admin.albumi-index')->with('albumi', $albumi);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::all();
       return view('admin.album-create')->with('categories', $categories);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' 	=> 'required',
			'type'		=> 'required',
            'category'  => 'required'
        ]);

       
        $album = Album::create($request->all());
        $id = $album->id;

        //redirekt
		return redirect('/dashboard/albumi/'.$id.'/media')->with('success', 'Novi album dodat!');
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show($id=null)
    {

        if(!$id) {
            return redirect('/dashboard/albumi/index')->with('error', 'Nepoznat album!');
        }

		$album = Album::find($id);
        $slike = $album->media;
        //dd($album->media);
        $naslovna = $slike->shift();

        return view('admin.album')->with('album', $album)->with('slike', $slike)->with('naslovna', $naslovna);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit($id=null)
    {
        if(!$id) {
            return redirect('/dashboard/albumi/index')->with('error', 'Nepoznat album!');
        }

		$album = Album::findOrFail($id);
        $categories = Category::all();

        $slike = $album->media;

        $category = Category::where('title', $album->category)->limit(1)->get()->shift();
        if ($category) {
        $subcategories = Subcategory::where('category_id', $category->id)->get();
        } else {
           $subcategories = null; 
        }       
      	return view('admin.album-edit')->with('album', $album)
                                       ->with('slike', $slike)
                                       ->with('categories', $categories)
                                       ->with('subcategories', $subcategories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

       // prebacuje $request u arej
       $input = $request->all(); 
	 
       // album i polja u tabeli
	   $album = Album::findOrFail($id);
       $db_fields = array_keys($album->getAttributes()); 

       // moze i ovako
       //$fields = array_keys($album->getOriginal());

       // dodeljuje vrednosti
       foreach ($db_fields as $field) {
            if (array_key_exists($field, $input) && isset($input[$field])) {
                $album->$field = $input[$field];
            }
        }

    	//save
		$album->save();
		
		//redirekt
		return redirect('/dashboard/albumi/create')->with('success', 'Album je sačuvan!');
	}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Album  $album
     * @return \Illuminate\Http\Response
     */

    public function destroy($id)
    {
		$album = Album::findOrFail($id);
		$album->delete();
		return redirect('/dashboard/albumi')->with('success', 'Album obrisan!');
		
    }




}
