@extends('layouts.master')

@section('content')
<h2>Blah</h2>
	@foreach($posts as $post)
	
	<h3> {{ $post->title }} </h3>
	<p>	{{ $post->body }} </p>
	@endforeach
@stop