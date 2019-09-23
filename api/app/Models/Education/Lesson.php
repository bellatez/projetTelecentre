<?php

namespace App\Models\Education;

use App\Models\Education\Course;
use App\Models\Education\Levels;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = [
    	
    ];

    public function level()
    {
    	$this->belongsTo(Levels::class, 'id', 'lesson_level');
    }

    public function course()
    {
    	$this->belongsTo(Course::class, 'id', 'course_id');
    }

    public function user()
    {
    	$this->belongsTo(User::class, 'id', 'created_by');
    }
}
