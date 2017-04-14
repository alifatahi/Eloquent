<?php

namespace App\Model;
use App\Model\User;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     * Each Post Belongs to only one User
     */
    public function user()
    {
        return $this->belongsTo('App\Model\User');
    }


    public function comments()
    {
        return $this->morphMany('App\Model\Comment','commentable');
    }
}
