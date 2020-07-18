<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Prods extends Model
{
    public $timestamps = true;
    protected $table = "order_prods";

    public function product(){
        return $this->belongsTo('App\Product','prod_id','prod_id');
    }

    public function order(){
        return $this->belongsTo('App\Order','id','id');
    }
}
