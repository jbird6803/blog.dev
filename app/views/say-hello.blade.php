@extends('layouts.master')
@section('content')
	<h1>Hello {{{$name}}} </h1>

	<h3>Roll Dice Game - Pick A Number</h3>
	@for ($i=1; $i <= 6 ; $i++)
		{{-- <a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{$i}}}</a> --}}
		{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn-default']) }}
	@endfor
			
@stop