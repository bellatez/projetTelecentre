<?php

namespace App\Models\Education;

use App\Models\Education\Lesson;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Generated_Code extends Model
{
    protected $fillable = [
    	
    ];

    public function lessons()
    {
    	$this->belongsTo(Lesson::class, 'id', 'lesson');
    }

    public function students()
    {
    	$this->belongsTo(User::class, 'id', 'student');
    }
}
