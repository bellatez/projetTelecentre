<?php

namespace App\Models\Education;

use App\Models\Education\Lib_Cat;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    protected $fillable = [
    	
    ];

    public function Category()
    {
    	$this->belongsTo(Lib_Cat::class, 'id', 'category');
    }
}
