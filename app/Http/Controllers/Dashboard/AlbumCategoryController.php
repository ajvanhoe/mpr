<?php

namespace App\Http\Controllers\Dashboard;

use App\AlbumCategory as Category;
use App\AlbumSubcategory as Subcategory;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AlbumCategoryController extends Controller
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

        //return view('admin.album-categories');

         $categories = Category::all();
         return view('admin.album-categories')->with('categories', $categories);
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
            'title'     => 'required',
        ]);

        Category::create($request->all());
        return redirect('/dashboard/albumi/categories/index')->with('success', 'Nova kategorija dodata!');
    }

   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AlbumCategory  $albumCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
     
        // $this->validate($request, [
        //     'title'     => 'required',
        // ]);
        
        if($request->title !== null){
        $category->title = $request->title;
        }
        
        $category->description = $request->description;
       

        $category->save();

        return redirect('/dashboard/albumi/categories/'.$id.'/subcategories')->with('success', 'Kategorija je promenjena!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AlbumCategory  $albumCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $subcats = Subcategory::where('category_id', $id)->get();

        foreach($subcats as $subcat){
        $subcat->delete();
        }

        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/dashboard/albumi/categories/index')->with('success', 'Kategorija obrisana!');

    }
}


/*

$table->dropForeign('answers_user_id_foreign');
$table->foreign('user_id')
->references('id')->on('users')
->onDelete('cascade');


*/
