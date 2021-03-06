<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', array('as' => 'home', 'uses' => 'ForecastrController@search'));
Route::post('/', 'ForecastrController@search');

//Route::get('/{location}', 'ForecastrController@conditions');

// Route::post('/conditions', array(
// 	'as' => 'location_post',
// 	'uses' => 'ForecastrController@conditions'
// ));

Route::get('/data', 'DataController@index');
