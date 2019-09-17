<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';

    protected $fillable = [
        'title',
        //'description'
    ];

    public $timestamps = false;
    
     		//  one-to-many: hasMany prvo ide forein pa local
    public function items() {
        return $this->hasMany('App\Item', 'category', 'title');
    }

     public function subcats() {
        return $this->hasMany('App\Subcategory', 'category_id', 'id'); 
    }


}
