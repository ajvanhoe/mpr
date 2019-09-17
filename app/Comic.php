<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $table = 'comics';

    protected $fillable = [
        'title', 
        'author',

        'publisher', 
        'press',
        'year', 
        'edition', 
        'description', 

        'code', 
        'price', 
        
        'category', 
        'subcategory',
    ];


    public function media() {
        return $this->hasMany(ComicMedia::class);
    }



                //  one-to-many: belongsTo prvo ide local pa forein
    public function getCategory() {
       return $this->belongsTo('App\ComicCategory', 'category', 'title');
    }





}
