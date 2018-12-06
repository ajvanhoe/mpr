<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
 
	protected $table = 'books';

    protected $fillable = [

        'title', 
        'author',
        'publisher', 
        'year', 
        'edition', 
        'description', 

        'code', 
        'price', 
        
        'category', 
        'subcategory',
    ];


    public function media() {
        return $this->hasMany(BookMedia::class);
    }

           //  one-to-many: belongsTo prvo ide local pa forein
    public function getCategory() {
       return $this->belongsTo('App\BookCategory', 'category', 'title');
    }





}
