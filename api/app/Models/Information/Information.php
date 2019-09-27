<?php

namespace App\Models\Information;

use App\Models\Information\Info_Cat;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = [
    	'title',
    	'category',
    	'content',
    	'date',
    	'posted_by'
    ];

    public function category()
    {
    	$this->belongsTo(Info_Cat::class, 'id', 'category');
    }

    public function user()
    {
    	$this->belongsTo(User::class, 'id', 'posted_by');
    }

    public function userLocation()
    {
    	return $this->hasOneThrough(Location::class, User::class, 'location', 'id');
    }
}
