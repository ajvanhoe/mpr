<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookCategory extends Model
{
   protected $table = "book_categories";

   protected $fillable = [
        'title', 
        'description', 
    ];


     		//  one-to-many: hasMany prvo ide forein pa local
     public function books() {
        return $this->hasMany('App\Book', 'category', 'title');
    }
}
