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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('say-hello', function()
{
	return "Hello Codeup!";
});

Route::get('say-hello/{name}', function($name)
{
	if ($name == 'John') {
		return Redirect::to('/');
	} else {
		return "Hello $name";
	}
});

Route::get('resume', function()
{
	return "This is my resume!";
});

Route::get('portfolio', function()
{
	return "This is my portfolio!";
});
