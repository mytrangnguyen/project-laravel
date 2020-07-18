<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";

    public function category(){
        return $this->belongsTo('App\Category','cate_id','cate_id');
    }

    public function orders_prods(){
        return $this->hasMany('App\Order_Prods','id_prod','id');
    }
}
