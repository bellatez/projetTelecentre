<?php

namespace App;

use App\Models\Location;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Lumen\Auth\Authorizable;

class User extends Model
{
   use LaratrustUserTrait;
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone', 'location'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    public function location()
    {
        $this->hasOne(Location::class, 'id', 'location');
    }
}
