<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = ['tags'];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
}
