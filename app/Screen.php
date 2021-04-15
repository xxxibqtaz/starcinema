<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
    protected $table='screen';
    protected $filltable=['id','id_movie','id_room','start_date','end_date'];
    public $timestamps = false;

    public function movie()
    {
        return $this->belongsTo(Movie::class,'id_movie','id')
            ->select(['id','name','trailer','image','description','duration','release_date', 'id_category','rating']);
    }
    public function room()
    {
        return $this->belongsTo(Room::class,'id_room','id')
            ->select(['id','name']);
    }
}
