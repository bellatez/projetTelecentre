<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    //
    protected $fillable = [
        'receiver_id',
        'sender_id',
        'content'
    ];
}
