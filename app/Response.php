<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'response';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
}
