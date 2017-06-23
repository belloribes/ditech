<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekdays extends Model
{
	protected $table = 'weekdays';

    protected $fillable = [
        'name',
    ];

 }
