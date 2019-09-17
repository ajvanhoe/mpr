<?php

namespace App\Http\Controllers\Dashboard;

use App\BookSubcategory as Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\BookCategory as Category;

class BookSubcategoryController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//


     public function index($category=null)
    {

        if(!$category) {
            return redirect('/dashboard/knjige/categories/index')->with('error', 'Nepoznata kategorija!');
        }

        $category = Category::findOrFail($category);
        $subcategories = Subcategory::where('category_id', $category->id)->where('parent_id', null)->get();

        return view('admin.book-subcategories')->with('category', $category)->with('subcategories', $subcategories);

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

        return redirect('/dashboard/knjige/categories/'.$id.'/subcategories')->with('success', 'Nova podkategorija dodata!');
    }





}
