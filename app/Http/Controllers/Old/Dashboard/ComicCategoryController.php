<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\ComicCategory as Category;
use App\ComicSubategory as Subcategory;

class ComicCategoryController extends Controller
{
    public function index()
    {
         $categories = Category::all();
         return view('admin.comic-categories')->with('categories', $categories);
    }


    public function store(Request $request)
    {
        
        $this->validate($request, [
            'title'     => 'required',
        ]);

        Category::create($request->all());
        return redirect('/dashboard/stripovi/categories/index')->with('success', 'Nova kategorija dodata!');
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
     
              
        if($request->title !== null){
        $category->title = $request->title;
        }
        
        $category->description = $request->description;
       

        $category->save();

        return redirect('/dashboard/stripovi/categories/'.$id.'/subcategories')->with('success', 'Kategorija je promenjena!');

    }

    public function destroy($id)
    {
        
        $subcats = Subcategory::where('category_id', $id)->get();

        foreach($subcats as $subcat){
        $subcat->delete();
        }

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/dashboard/stripovi/categories/index')->with('success', 'Kategorija obrisana!');

    }
}
