<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';
    // protected $fillables = ['id'];
    public function category()
    {
    	return $this->belongsToMany('App\Category');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function tags()
    {
    	return $this->belongsToMany('App\Tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
