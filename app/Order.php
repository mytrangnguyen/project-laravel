<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Order extends Model
{
    use Notifiable;

    protected $table = "Orders";
    public $timestamps = true;

    public function orders_prods()
    {
        return $this->hasMany('App\Order_Prods', 'order_id', 'order_id');
    }
}