@extends('layouts.master')
@section('content')
	<h1>Hello {{{$name}}} </h1>
	<h1>Hello {{$name}} </h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

	@for ($i=1; $i <= 6 ; $i++)
		{{-- <a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{$i}}}</a> --}}
		{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn-default']) }}
	@endfor
			
@stop