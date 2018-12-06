<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ComicMedia extends Model
{
    protected $table = "comic_media";
    protected $fillable = ['file'];


    public function comic() {
        return $this->belongsTo(Comic::class);
    }
}
