<?php

namespace App;
use App\Author;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function bookAuthor()

{

    return $this->belongsTo('App\Author', 'author_id', 'id');

}
}
