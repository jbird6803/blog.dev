<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return Redirect::action('HomeController@sayHello', ['Jason']);
	}

	public function sayHello($name)
	{
		$age = 28;
		$data = [
			'name' => $name,
			'age' => $age
		];
		return View::make('say-hello', $data);
	}

	public function rollDice($guess)
	{
		$roll = mt_rand(1, 6);
		$data = [
			'roll' => $roll,
			'guess' => $guess
		];
	
		return View::make('roll-dice', $data);
	}

	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}


}







