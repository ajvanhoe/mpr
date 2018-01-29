<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
     const BLANK    = '';
     const ZERO 	= 0;


     protected $fillable = [
        'ime', 'prezime', 'email', 'zanimanje', 'pare', 'peder', 
    ];

}
