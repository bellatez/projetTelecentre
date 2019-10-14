<?php

namespace App\Models\Information;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'product_name',
    	'description',
    	'contact',
    	'quantity',
        'price',
        'media',
    	'posted_by'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class, 'posted_by', 'id');
    }
}
