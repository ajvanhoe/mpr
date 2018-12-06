<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ComicCategory as Category;
use App\ComicSubcategory as Subcategory;

class ComicSubcategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//

    public function index($category=null)
    {

        if(!$category) {
            return redirect('/dashboard/stripovi/categories')->with('error', 'Nepoznata kategorija!');
        }

        $category = Category::findOrFail($category);
        $subcategories = Subcategory::where('category_id', $category->id)->where('parent_id', null)->get();

        return view('admin.comic-subcategories')->with('category', $category)->with('subcategories', $subcategories);

    }

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

        return redirect('/dashboard/stripovi/categories/'.$id.'/subcategories')->with('success', 'Nova podkategorija dodata!');
    }

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

    }
    
}
