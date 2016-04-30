<?php

namespace course;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name','last_name', 'email', 'password','type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function profile(){

       return $this->hasOne('course\UserProfile');
    }

    public function getFullNameAttribute(){
        //dd('full name');

        return $this->first_name.' '. $this->last_name;
    }

    public function setPasswordAttribute( $value)
    {
        if(!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }
}
