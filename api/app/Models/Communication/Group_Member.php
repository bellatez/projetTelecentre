<?php

namespace App\Models\Communication;

use App\Models\Communication\Chat_Group;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Group_Member extends Model
{
    protected $fillable = [
    	
    ];

    public function group()
    {
    	$this->belongsTo(Chat_Group::class, 'id', 'group_id');
    }

    public function member()
    {
    	$this->belongsTo(User::class, 'id', 'user_id');
    }
}
