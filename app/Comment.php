<?php

namespace App;

class Comment extends Model
{
    public function post(){
        $this->hasOne(Post::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
