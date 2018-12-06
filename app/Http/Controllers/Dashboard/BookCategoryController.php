<?php

namespace App\Http\Controllers\Dashboard;

use App\BookCategory as Category;
use App\BookSubcategory as Subcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookCategoryController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    //**********************************************************************************************//
  
  
    public function index()
    {
         $categories = Category::all();
         return view('admin.book-categories')->with('categories', $categories);
    }


    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title'     => 'required',
        ]);

        Category::create($request->all());
        return redirect('/dashboard/knjige/categories/index')->with('success', 'Nova kategorija dodata!');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
             
        if($request->title !== null){
        $category->title = $request->title;
        }
        
        $category->description = $request->description;
        $category->save();

        return redirect('/dashboard/knjige/categories/'.$id.'/subcategories')->with('success', 'Kategorija je promenjena!');

    }


    public function destroy($id)
    {
        
        $subcats = Subcategory::where('category_id', $id)->get();

        foreach($subcats as $subcat){
        $subcat->delete();
        }

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/dashboard/knjige/categories/index')->with('success', 'Kategorija obrisana!');

    }


}
