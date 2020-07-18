<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $table = 'sellers';
    protected $fillable = ['fullname', 'address','paper_identication','email','phone','user_role','created_date','updated_date'];
}
