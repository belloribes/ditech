<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weekdays;
use App\Schedules;
use App\RoomPlaces;
use App\Room;

class RoomsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('rooms', [
            'weekdays'  => Weekdays::get(),
            'schedules' => Schedules::get(),
            'places'    => RoomPlaces::get(),
            'rooms'     => Room::orderby('name', 'asc')->get(),
        ]);
    }
}
