<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
       'name',
    ];
}
