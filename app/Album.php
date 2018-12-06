<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{

    protected $table = 'albums';

    protected $fillable = [

        'title', 
        'publisher', 
        'year', 
        'edition', 

        'code', 
        'description', 
        'price', 
        
        'type', 
        'category', 
        'subcategory',
    ];

    public function media() {
        return $this->hasMany(AlbumMedia::class);
    }

                //  one-to-many: belongsTo prvo ide local pa forein
    public function getCategory() {
       return $this->belongsTo('App\AlbumCategory', 'category', 'title');
    }











}
