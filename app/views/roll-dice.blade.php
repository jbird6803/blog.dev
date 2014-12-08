@extends('layouts.master')

@section('content')

	<h1>Roll Dice</h1>
	<p>You rolled a {{{$roll}}}</p>
	<p>You guessed a {{{$guess}}}</p>
	@if ($roll == $guess)
		<h2>Good Job. You got it right</h2>
		<h3>Play Again</h3>
	@else
		<h3>Try Again</h3>
	@endif

	@for ($i=1; $i <= 6 ; $i++)
		{{-- <a href="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{$i}}}</a> --}}
		{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class' => 'btn btn-default']) }}
	@endfor

@stop