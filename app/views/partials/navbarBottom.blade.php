<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
  <div class="container">
  	    <div>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="/resume">Resume</a></li>
	        <li><a href="/portfolio">Portfolio</a></li>
	        @if (Auth::guest())
	          <li><a href="/login">Log In</a></li>
	        @else
	          <li><a href="/logout">Log Out</a></li>
	        @endif
	      </ul>
	    
	    </div><!-- /.navbar-collapse -->
  </div>
</nav>