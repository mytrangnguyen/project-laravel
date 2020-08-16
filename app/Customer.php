<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey = "id";
    protected $table = "customers";
    public $timestamps = true;
}
