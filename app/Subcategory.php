<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $table = "subcategories";
    protected $fillable = [
        'title', 
        //'description', 
        'category_id',
        'parent_id'
    ];

    public $timestamps = false;
    

    public function sub_subcats() {
      
    	$subcats = DB::table('subcategories')
            ->where('parent_id', '=', $this->id)
            ->get();
            
            return $subcats;
    }
}
