<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	// private $type;
    protected $table;

    protected $fillable = [
        'Albumi', 
        'Knjige',
        'Stripovi',
        
    ];

    public $timestamps = false;



    // static function setType($type){
    // 	$this->$type = $type;
    // }



 

  

}
