<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ComicCategory as Category;
use App\ComicSubcategory as Subcategory;

class ComicCategoryController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//



    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title'     => ['required', 'unique:comic_categories']
        ]);

        Category::create($request->all());
        return redirect('/dashboard/categories/comics')->with('success', 'Nova kategorija dodata!');
    }


    public function destroy($id)
    {
        
        $subcats = Subcategory::where('category_id', $id)->get();

        foreach($subcats as $subcat){
        	$subcat->delete();
        }

	        $category = Category::findOrFail($id);
	        $category->delete();

        return redirect('/dashboard/categories/comics')->with('success', 'Kategorija obrisana!');

    }

    public function store_subcat(Request $request)
    {
        
        $this->validate($request, [
            'title'         => 'required',
            'category_id'   => 'required',
        ]);

        Subcategory::create($request->all());
        return redirect('/dashboard/categories/comics')->with('success', 'Nova podkategorija dodata!');
    }


    public function destroy_subcat($id)
    {
        $subcategory = Subcategory::findOrFail($id);
        $subcategory->delete();

        return redirect('/dashboard/categories/comics')->with('success', 'Podkategorija obrisana!');

    }
}
