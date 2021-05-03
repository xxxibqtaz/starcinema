<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table='category';
    protected $filltable=['id','id_user','id_screen','id_coupon','create_date','total_cost','status'];
}
