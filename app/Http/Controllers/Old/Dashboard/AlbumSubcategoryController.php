<?php

namespace App\Http\Controllers\Dashboard;

use App\AlbumSubcategory as Subcategory;
use App\AlbumCategory as Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumSubcategoryController extends Controller
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

    public function index($category=null)
    {

        if(!$category) {
            return redirect('/dashboard/albumi/categories')->with('error', 'Nepoznata kategorija!');
        }

        $category = Category::findOrFail($category);
        $subcategories = Subcategory::where('category_id', $category->id)->where('parent_id', null)->get();

        return view('admin.album-subcategories')->with('category', $category)->with('subcategories', $subcategories);

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
            'title'     => 'required',
        ]);

        $subcategory = new Subcategory;
        $subcategory->title = $request->title;
        $subcategory->category_id = $id;

        if($request->description !== null){
            $subcategory->description = $request->description;
        } 

        if($request->parent !== null) {
        $subcategory->parent_id = $request->parent;
        }

        $subcategory->save();

        return redirect('/dashboard/albumi/categories/'.$id.'/subcategories')->with('success', 'Nova podkategorija dodata!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlbumSubcategory  $albumSubcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    
        $origin_link = $_SERVER['HTTP_REFERER'];

        $subcat = Subcategory::findOrFail($id);
        if($subcat->parent_id) {
            $child_subcats = Subcategory::where('parent_id', $id)->get();

            foreach ($child_subcats as $child_subcat) {
                $child_subcat->delete();
            }
        }
        $subcat->delete();

        return redirect($origin_link)->with('success', 'Uklonjeno!');

        /*** testirati ***/
        //$url = $request->url();
        //$url = $request->fullUrl();
        // return redirect($url)->with('success', 'Done!');


    }
}
