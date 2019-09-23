<?php

namespace App\Models\Education;

use App\Models\Education\Exercise_qn;
use Illuminate\Database\Eloquent\Model;

class Exercise_ans extends Model
{
    protected $fillable = [
    	
    ];

    public function questions()
    {
    	$this->belongsTo(Exercise_qn::class, 'id', 'question');
    }
}
