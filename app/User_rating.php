<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_rating extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user_rating';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
