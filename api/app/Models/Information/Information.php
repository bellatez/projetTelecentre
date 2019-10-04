<?php

namespace App\Models\Information;

use App\Models\Information\Info_Cat;
use App\Models\Location;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
    	'title',
    	'category',
    	'content',
    	'date',
    	'priority',
    	'posted_by'
    ];

    public function category()
    {
    	return $this->belongsTo(Info_Cat::class, 'category', 'id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'posted_by', 'id');
    }
}
