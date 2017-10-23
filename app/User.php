<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'user';

    protected $fillable = [
        'name', 'sename', 'email', 'password', 'status', 'public', 'rols_id', 'avatar', 'phone',
        'year', 'month', 'day', 'country', 'region', 'city', 'street', 'house', 'sex', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function products() {
        return $this->hasMany('App\Product');
    }

    public function messages() {
        return $this->hasMany('App\Message');
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

    public function product_ratings() {
        return $this->hasMany('App\Product_rating');
    }

    public function user_ratings() {
        return $this->hasMany('App\User_rating');
    }

    public function roles() {
        return $this->belongsTo('App\Rols');
    }

    public function responses() {
        return $this->hasMany('App\Response');
    }

    public function payments() {
        return $this->hasMany('App\Payment');
    }
}
