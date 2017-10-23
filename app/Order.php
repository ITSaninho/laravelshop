<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'order';


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    public function user() {
        return $this->belongsTo('App\User');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }


    public function payment() {
        return $this->belongsTo('App\Payment');
    }
}
