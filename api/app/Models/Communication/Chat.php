<?php

namespace App\Models\Communication;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $fillable = [
        'sender_id', 'receiver_id','content',
    ];

    public function sender()
    {
    	$this->belongsTo(User::class, 'id', 'sender_id');
    }

    public function receiver()
    {
    	$this->belongsTo(User::class, 'id', 'receiver_id');
    }
}
