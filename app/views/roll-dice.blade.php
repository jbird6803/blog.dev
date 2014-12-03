@extends('layouts.master')

@section('content')

	<h1>Roll Dice</h1>
	<p>You rolled a {{{$roll}}}</p>
	<p>You guessed a {{{$guess}}}</p>
	@if ($roll == $guess)
		<h2>Good Job. You got it right.</h2>
	@else
		<h3>Try Again.</h3>
	@endif

@stop