<?php

namespace App\Model;
use Illuminate\Database\Eloquent\Model;


class Country extends Model{
    protected $table = 'country';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasManyThrough
     * Method for hasManyThrough
     * for this first we declare final Model we want to get then intermediate
     * Model third we put intermediate foreign key
     * and 4th is final foreign key
     */
    public function post()
    {
        return $this->hasManyThrough('App\Model\Post','App\Model\User','country_id','user_id');
    }
}