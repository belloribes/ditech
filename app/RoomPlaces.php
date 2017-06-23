<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomPlaces extends Model
{

	protected $table = 'rooms_places';

    protected $fillable = [
        'name'
    ];

 }
