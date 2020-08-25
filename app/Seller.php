<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Seller extends Authenticatable
{
    protected $guard = 'seller';
    protected $primaryKey = "id";
    // protected $fillable = ['fullname', 'address','paper_identication','email','phone','user_role','created_date','updated_date'];
}
