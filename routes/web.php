<?php

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
	$event = App\Models\Event::all();
    return view('layout')->with('events', $event);
});

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin', 'web', 'auth'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('event', 'EventCrudController');
});