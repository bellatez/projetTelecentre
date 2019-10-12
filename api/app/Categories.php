<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
        'title'
      ];
}
