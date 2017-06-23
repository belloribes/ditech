<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{

	protected $table = 'rooms';

    protected $fillable = [
        'place_id', 'name', 'description', 'chairs'
    ];

    public function place()
    {
        return $this->belongsTo('App\RoomPlaces', 'place_id');
    }

    public function times()
    {
        return $this->hasMany('App\RoomTime');
    }

 }
