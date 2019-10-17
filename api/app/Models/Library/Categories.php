<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
        'title'
      ];
}
