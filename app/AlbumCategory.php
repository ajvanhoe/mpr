<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumCategory extends Model
{
    protected $table = "album_categories";
    protected $fillable = [
        'title', 
        //'description', 
    ];

    public $timestamps = false;
    

    //  one-to-many: hasMany prvo ide forein pa local
    public function albums() {
        return $this->hasMany('App\Album', 'category', 'title');
    }

    public function subcats() {
    	return $this->hasMany('App\AlbumSubcategory', 'category_id', 'id');	
    }

}
