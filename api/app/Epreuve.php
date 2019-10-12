<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Epreuve extends Model
{
    //

    public $timestamps = true;

    protected $fillable = [
        'title', 'status', 'file_link', 'session', 'download_number', 'comments', 'serie', 'examen_id', 'matiere_id'
    ];
}
