<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table='news';
    protected $filltable=['id','title','image','preview','content','release_date'];
    public $timestamps = false;
}
