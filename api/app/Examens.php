<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examens extends Model
{

  
    public $timestamps = true;

    protected $fillable = [
        'title',
      ];
}
