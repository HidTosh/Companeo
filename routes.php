<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/


Route::get('api/teams/', 'TeamsController@index');
Route::get('api/teams/:{id}', 'TeamsController@show');


	Route::resource('api', 'TeamsController',
     ['only' => ['store', 'edit', 'destroy', 'update']]);


Route::get('api/events/', 'EventsController@index');
Route::get('api/events/:{id}', 'EventsController@show');

	Route::resource('aqi', 'EventsController',
     ['only' => ['store', 'edit', 'destroy', 'update']]);

/////////////////////////////////////
	////////////////////////////////////

Route::get('api/matches/', 'MatchesController@index');
Route::get('api/matches/:{id}', 'MatchesController@show');

Route::group(['middleware' => ['web']], function () {
    //
});
