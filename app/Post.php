<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name', 'text', 'slug', 'user_id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
    return $this->belongsToMany('App\Tag');
    }
}
