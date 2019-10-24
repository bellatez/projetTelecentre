<?php

namespace App;

use App\Models\Location;
use Illuminate\Auth\Authenticatable;
use Laravel\Lumen\Auth\Authorizable;
use Illuminate\Database\Eloquent\Model;
use Laratrust\Traits\LaratrustUserTrait;
use Laravel\Passport\HasApiTokens;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;

class User extends Model implements AuthenticatableContract, AuthorizableContract
// class User extends Model
{
   use LaratrustUserTrait, HasApiTokens, Authenticatable, Authorizable;
   // use LaratrustUserTrait;
   

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name', 'phone', 'location', 'api_token', 'password'
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
       return $this->hasOne(Location::class, 'id', 'location');
    }
}
