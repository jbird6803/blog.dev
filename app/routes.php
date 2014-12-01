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
	return View::make('say-hello')->with('viewName', 'Codeup');
});

Route::get('say-hello/{name}', function($name)
{
	$data = [
		'name' => $name,
	];
	return View::make('say-hello')->with('name', $name);
	return View::make('say-hello')->with($data);
	return View::make('say-hello', $data);
});

Route::get('resume', function()
{
	return "This is my resume!";
});

Route::get('portfolio', function()
{
	return "This is my portfolio!";
});

Route::get('roll-dice/{guess}', function($guess)
{
	$roll = mt_rand(1, 6);
	$data = [
		'roll' => $roll,
		'guess' => $guess
	];
	
	return View::make('roll-dice', $data);
});



