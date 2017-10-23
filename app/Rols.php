<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rols extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'rols';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function user() {
        return $this->hasMany('App\User');
    }
}
