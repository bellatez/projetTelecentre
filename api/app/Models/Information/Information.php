<?php

namespace App\Models\Information;

use App\Models\Information\Info_Cat;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
    	
    ];

    public function category()
    {
    	$this->belongsTo(Info_Cat::class, 'id', 'category');
    }
}
