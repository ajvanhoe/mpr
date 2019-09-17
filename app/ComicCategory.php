<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicCategory extends Model
{
   protected $table = "comic_categories";
   protected $fillable = [
        'title', 
       // 'description', 
    ];

    public $timestamps = false;
    
    //  one-to-many: hasMany prvo ide forein pa local
     public function comics() {
        return $this->hasMany('App\Album', 'category', 'title');
    }

    public function subcats() {
      return $this->hasMany('App\ComicSubcategory', 'category_id', 'id'); 
    }

}
