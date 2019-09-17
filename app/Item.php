<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';

    protected $fillable = [

        'title', 
        'description', 

        'code', 
        'price', 
        
        'category', 
        'subcategory',
    ];


    public function media() {
        return $this->hasMany(Media::class);
    }

                //  one-to-many: belongsTo prvo ide local pa forein
    public function getCategory() {
       return $this->belongsTo('App\Category', 'category', 'title');
    }

    public function subcats() {
        return $this->hasMany('App\Subcategory', 'category_id', 'id'); 
    }


}
