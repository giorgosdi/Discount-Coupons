<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}
		{{ HTML::style('css/styles.css') }}
		{{ HTML::script('js/jquery-1.11.0.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
	</head>
	<body style='background-image:url("/img/cork_board.jpeg");'>
	<div class='container'>
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			    <span class="sr-only">Toggle navigation</span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			    <span class="icon-bar"></span>
			  </button>
			  <a class="navbar-brand" href="/">{{ HTML::image('img/png/glyphicons-21-home.png', 'alt-text',array('class'=>'img-rounded')) }}</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
			    <li class="<?= Request::url() == URL::route('new_coupons') ? 'active' : '' ?>"><a href="{{ URL::route('new_coupons') }}">New Coupons<span class="sr-only">(current)</span></a></li>
			    <li class="<?= Request::url() == URL::route('about_to_expire') ? 'active' : '' ?>"><a href="{{ URL::route('about_to_expire') }}">About to expire</a></li>
			<!--     @if (Auth::check())

			    @endif -->



			    <li class="dropdown">
			      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
			      <ul class="dropdown-menu" role="menu">
			      @foreach(Category::all() as $category)
			      	<li><a href="{{ URL::route('cat', array('id'=>$category->id)) }}">{{$category->title}}</a></li> <!-- Send the category id to the show function in CategoriesController -->
			      @endforeach
			      </ul>
			    </li>
			  </ul>
			  <form action="{{ URL::route('search_results') }}" class="navbar-form navbar-left" role="search">
			    <div class="form-group">
			    	<div class='col-sm-12'>
			      	{{ Form::text('search_query', null, array('class'=>'form-control col-sm-offset-1 col-sm-12')) }}
			      </div>
			    </div>
			    <button type="submit" class="btn btn-link"><span class="glyphicon glyphicon-search"></span></button>
			  </form>
			  <ul class="nav navbar-nav navbar-right">

			  @if (Auth::check())
			  	@if (Auth::user()->type == 'Professional')
			  	<!-- change the above to if(Auth::user()->type == 'Professional') -->
			  		<li><a href="{{ URL::route('coupons.create') }}">Post a coupon <span class="glyphicon glyphicon-tags"></span></a></li>
			  	@endif
			    <li class="dropdown">
			      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> {{ Auth::user()->username }} <span class="caret"></span></a>
			      <ul class="dropdown-menu" role="menu">
			        <li><a href="{{ URL::route('profile') }}">Profile</a></li>
			        <li><a href="{{ URL::route('logout') }}">Log out!</a></li>
			          </ul>
			        </li>
			      </ul>
			  @else
			    <li><a href="{{ URL::route('users.create') }}">Sing up !</a></li>
			    <li><a href="{{ URL::route('sessions.create') }}">Log in !</a></li>
			  @endif
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
		</nav>

		@yield('content')
</div>

	</body>
</html>
