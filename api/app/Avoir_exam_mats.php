<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avoir_exam_mats extends Model
{
    //
    public $timestamps = true;

    protected $fillable = [
        'matiere_id', 'examen_id'
        ];
}
