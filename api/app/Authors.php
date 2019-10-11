<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
        'name'
        ];
}
