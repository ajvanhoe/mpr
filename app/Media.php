<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = "media";
    protected $fillable = ['file'];

    public $timestamps = false;
    

    public function item() {
        return $this->belongsTo(Item::class);
    }
}
