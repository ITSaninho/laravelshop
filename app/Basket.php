<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'basket';

    protected $fillable = [
        'user_id', 'product_id', 'length', 'height', 'width', 'size_integer', 'size_string', 'weight', 'color',
        'material', 'count', 'status', 'public', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function product() {
        return $this->belongsTo('App\Product');
    }


    public function user() {
        return $this->belongsTo('App\User');
    }


}
