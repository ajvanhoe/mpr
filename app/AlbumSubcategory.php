<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AlbumSubcategory extends Model
{
    protected $table = "album_subcategories";
    protected $fillable = [
        'title', 
        //'description', 
        'category_id',
        'parent_id'

    ];

    public $timestamps = false;
    

    public function getCategory() {
       return $this->belongsTo('App\AlbumCategory', 'category_id', 'id');
    }



    public function sub_subcats() {
        
    	$subcats = DB::table('album_subcategories')
            ->where('parent_id', '=', $this->id)
            ->get();
            
            return $subcats;

    }



}
