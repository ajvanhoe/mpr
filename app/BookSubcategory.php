<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookSubcategory extends Model
{
    protected $table = "book_subcategories";
    protected $fillable = [
        'title', 
        'description', 
        'category_id',
        'parent_id'

    ];
    public function sub_subcats() {
      
    	$subcats = DB::table('book_subcategories')
            ->where('parent_id', '=', $this->id)
            ->get();
            
            return $subcats;
    }
}
