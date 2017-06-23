<?php

use Illuminate\Http\Request;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    // return redirect('/login');
});

Route::get('/salas', 'RoomsController@index')->name('rooms');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/rooms/register', function(Request $request) {
	try {
		dd($request->all());

		$room = \App\Room::find($request->id);

		
	} catch (Exception $e) {
		return json_ecode('erro' => $e->code);
	}
})->name('room_register');