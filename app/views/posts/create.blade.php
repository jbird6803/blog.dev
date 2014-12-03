@extends('layouts.master')

<h1>a</h1>

@section('content')

<div class="col-md-6">
{{ Form::open(array('action' => 'PostsController@store')) }}
	<div class="form-group">
		<label for="title">Title: </label>
		{{ Form::text('title', Input::old('title'), array('placeholder'=>'title')) }}
	</div>
	<div class="form-group">
		<label for="body">Body: </label>
		{{ Form::text('body', Input::old('body'), array('placeholder'=>'body')) }}
	</div>

	{{ Form::submit('submit') }}

{{ Form::close() }}
</div>
<div class="col-md-6">
</div>
@stop