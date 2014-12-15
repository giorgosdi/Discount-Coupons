<!DOCTYPE html>
<html>
	<head>
		<title>index</title>
		{{ HTML::style('css/bootstrap.css') }}
		{{ HTML::style('css/bootstrap-theme.css') }}
		{{ HTML::script('js/jquery-1.11.0.min.js') }}
		{{ HTML::script('js/bootstrap.min.js') }}
	</head>
	<body style='background-image:url("/img/background.jpg");'>
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
			  <a class="navbar-brand" href="/">Brand</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			  <ul class="nav navbar-nav">
			    <li class="active"><a href="#">New Coupons <span class="sr-only">(current)</span></a></li>
			    <li><a href="#">About to expire</a></li>
			    @if (Auth::check())

			    @endif



			    <li class="dropdown">
			      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
			      <ul class="dropdown-menu" role="menu">
			        <li><a href="#">Action</a></li>
			        <li><a href="#">Another action</a></li>
			        <li><a href="#">Something else here</a></li>
			        <li class="divider"></li>
			        <li><a href="#">Separated link</a></li>
			        <li class="divider"></li>
			        <li><a href="#">One more separated link</a></li>
			      </ul>
			    </li>
			  </ul>
			  <form class="navbar-form navbar-left" role="search">
			    <div class="form-group">
			      <input type="text" class="form-control" placeholder="Search">
			    </div>
			    <button type="submit" class="btn btn-default">Submit</button>
			  </form>
			  <ul class="nav navbar-nav navbar-right">

			  @if (Auth::check())
			  	@if (Auth::user()->type == 1)
			  		<li><a href="{{ URL::route('coupons.create') }}">Post a coupon</a></li>
			  	@endif
			    <li class="dropdown">
			      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
			      <ul class="dropdown-menu" role="menu">
			        <li><a href="">Profile</a></li>
			        <li><a href="{{ URL::route('logout') }}">Log out!</a></li>
			        <li class="divider"></li>
			            <li><a href="#">Separated link</a></li>
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
