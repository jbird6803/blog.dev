<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">Home</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/posts">Blog</a></li>
        @if (Auth::check())
          <li><a href="/posts/create">Create New Post</a></li>
        @endif
      </ul>

<div class="col-xs-6 col-sm-3" role="navigation">
      {{ Form::open(['action' => ['PostsController@index'], 'class' => 'navbar-form navbar-left', 'method' => 'GET', 'name' => 'search']) }}
      {{ Form::text('search', null, ['placeholder' => 'Search'])}}
      {{ Form::submit('Search') }}
      {{ Form::close() }}
</div>

  </div><!-- /.container-fluid -->
</nav>