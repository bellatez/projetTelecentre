<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;
class Books extends Model
{
    //

    public $timestamps = true;

    protected $fillable = [
        'title', 'isbn', 'edition_date', 'image_links', 'file_links', 'comments', 'author_id', 'categorie_id'
    ];
}
