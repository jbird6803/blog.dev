@extends('layouts.master')
@section('content')

<h1>Edit Blog Post</h1>

<div class="col-md-6">
{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method' => 'PUT'))) }}
	<div class="form-group">
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title', $post->title, array('placeholder'=>'title')) }}
		{{ $errors->first('title', '<span class="help-block">Title Is Required</span>'); }}
	</div>
	<div class="form-group">
		{{ Form::label('body', 'Body') }}
		{{ Form::textarea('body', $post->body, array('placeholder'=>'body', 'cols'=>'100', 'rows'=>'20')) }}
		{{ $errors->first('body', '<span class="help-block">Body Is Required</span>'); }}
	</div>

	{{ Form::submit('submit') }}

	{{ Form::close() }}
</div>
<div class="col-md-6">
</div>





@stop