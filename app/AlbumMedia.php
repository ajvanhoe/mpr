<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlbumMedia extends Model
{
    protected $table = "album_media";
    protected $fillable = ['file'];


    public function album() {
        return $this->belongsTo(Album::class);
    }
}
