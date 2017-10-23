<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'payment';

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function order() {
        return $this->belongsTo('App\Order');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function delivery() {
        return $this->belongsTo('App\Delivery');
    }


}
