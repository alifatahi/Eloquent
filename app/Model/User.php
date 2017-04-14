<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *    Each User Has many relation to post : title , body
     */
    public function post()
    {
        return $this->hasMany('App\Model\Post');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     * each user has One address not more
     */
    public function address()
    {
        return $this->hasOne('App\Model\Address');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     * Each User Can Has Many Roles: Admin , Moderator
     */
    public function role()
    {
        return $this->belongsToMany('App\Model\Role');
    }
}
