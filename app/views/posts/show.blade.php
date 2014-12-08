@extends('layouts.master')
@section('content')
	<h3> {{ $post->title }} </h3>
	<p> {{ $post->body }} </p>
	{{ HTML::link('/posts', 'View All Posts', array('class' => 'btn btn-primary btn-xs')) }}
	@if (Auth::check())
		{{ HTML::link('/posts' . $post->id . '/edit', 'Edit', array('class' => 'btn btn-success btn-xs')) }}
		{{ Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'DELETE', 'id'=>'delete-form')) }}
	    {{ Form::submit('Delete', ['class'=>'btn btn-danger btn-xs']) }}
    @endif
    {{ Form::close() }}
@stop

@section('bottomscript')
	<script type="text/javascript">
		$('.delete-form').submit(function(e)) {
			if(!confirm('Are you sure you want to delete this post?')) {
				e.preventDefault();
			}
		});
	</script>
@stop