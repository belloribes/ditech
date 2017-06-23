<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTime extends Model
{

	protected $table = 'rooms_times';

    protected $fillable = [
        'room_id', 'weekday_id', 'schedule_id'
    ];

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    public function weekday()
    {
        return $this->belongsTo('App\Weekdays', 'weekday_id');
    }

    public function schedule()
    {
        return $this->belongsTo('App\Schedules', 'schedule_id');
    }


    public function scopeOfRoom($query, $room_id, $weekday_id, $schedule_id)
    {
        return $query->where('room_id', $room_id)
        			 ->where('weekday_id', $weekday_id)
        			 ->where('schedule_id', $schedule_id);
    }

 }
