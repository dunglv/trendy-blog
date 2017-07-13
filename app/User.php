<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        if ($this->auth === 1) {
            return true;
        }
        return false;
    }
    public function hasRole($role='')
    {
        if ($this->auth === 1) {
            $r = 'admin';
        }else if($this->auth === 2){
            $r = 'user';
        }else{
            $r = 'guest';
        }
        return in_array($r, $role);
    }
    
    public function isGuest()
    {
        if ($this->auth === 0) {
            return true;
        }
        return false;
    }
    
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
