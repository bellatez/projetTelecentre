<?php

namespace App\Models\Education;

use App\Models\Education\Lesson;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
    	'course_name',
    	'course_description',
    	'course_image',
    	'creator_id'
    ];

    public function lesson()
    {
    	$this->hasMany(Lesson::class);
    }
}
