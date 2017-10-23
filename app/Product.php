<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'product';

    protected $fillable = [
        'alias',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function baskets() {
        return $this->hasMany('App\Basket');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function orders() {
        return $this->hasMany('App\Order');
    }

    public function product_options() {
        return $this->hasMany('App\Product_options');
    }

    public function product_ratings() {
        return $this->hasMany('App\Product_rating');
    }

    public function images() {
        return $this->hasMany('App\Images');
    }
}
