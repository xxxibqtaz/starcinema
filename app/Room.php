<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table='movies';
    protected $filltable=['id','name'];
    public $timestamps = false;

}
