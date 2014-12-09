@extends('layouts.master')
@section('content')

<h1>My Blog</h1>

	@foreach($posts as $post)
		<div>
		<h2> {{ $post->title}}</h2>
		<h4>Created</h4>
		<p> {{ $post->created_at->diffForHumans()}} </p>
		
		@if ($post->created_at != $post->updated_at) 
			<h4>Edited</h4>
			<p> {{ $post->updated_at->diffForHumans()}} </p>
		@endif
		
			<p>	{{ $post->body }} </p>

		<div>{{ HTML::link('/posts' . $post->id, 'View', array('class' => 'btn btn-primary btn-xs')) }}</div>
		@if (Auth::check())
			<div>{{ HTML::link('/posts' . $post->id . '/edit', 'Edit', array('class' => 'btn btn-success btn-xs')) }}</div>
			<button class="btn btn-danger delete-btn btn-xs" data-post-id="{{{ $post->id }}}">Delete</button>
		@endif
	@endforeach
	
	<div>{{ $posts->appends(['search' => $search])->links() }}</div>

	{{ Form::open(array('method' => 'DELETE', 'id'=>'delete-form')) }}
    {{ Form::close() }}

@stop

@section('bottomscript')

	<script type="text/javascript">
	$(".delete-btn").click(function() {
		var postId = $(this).data('post-id')

		$("#delete-form").attr('action', '/posts/' + postId);

		if(confirm('Are you sure you want to delete this post?')) {
			$("#delete-form").submit();
		}
	});
	</script>

@stop