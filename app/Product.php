<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    public function order(){
    	return $this->hasMany('App\OrderDetail');
    }

    public function category(){
    	return $this->hasOne('App\ProductCategory');
    }
}
