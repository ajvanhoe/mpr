<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookMedia extends Model
{
    
	protected $table = "book_media";
    protected $fillable = ['file'];

    public function book() {
        return $this->belongsTo(Book::class);
    }
}
