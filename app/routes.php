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

Route::group(['domain' => $_ENV['APP_DOMAIN']],function()
{
    Route::get('/',['as' => 'landingpage','uses' => 'LinksController@index']);
});
Route::get('/', function()
{
	return View::make('hello');
});

