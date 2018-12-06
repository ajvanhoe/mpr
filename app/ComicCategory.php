<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicCategory extends Model
{
   protected $table = "comic_categories";
   protected $fillable = [
        'title', 
        'description', 
    ];

    //  one-to-many: hasMany prvo ide forein pa local
     public function comics() {
        return $this->hasMany('App\Album', 'category', 'title');
    }
}
