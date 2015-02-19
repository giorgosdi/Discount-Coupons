@extends('layouts.default')

@section('content')

<!-- Grid system -->
<div class="col-md-12">
	<div class="row">

	  <div class="col-md-4">

	  </div>

	  <!-- Login space -->

	  <div class="panel panel-default">
	  	<div class='panel-body'>
	  	<h1 class="text-center">Sing in !</h1>
			{{ Form::open(array('route' => 'sessions.store', 'class'=>'form-horizontal', 'role'=>'form')) }}
				<div class='form-group'>
					<!-- {{ Form::label('username', 'Username', array('class'=>'col-sm-3 control-label')) }} -->
					<div class='col-sm-9'>
						{{ Form::text('username', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Fill in your Username..')) }}
					</div>
				</div>

				<div class='form-group'>
					<!-- {{ Form::label('password', 'Password', array('class'=>'col-sm-3 control-label')) }} -->
					<div class='col-sm-9'>
						{{ Form::password('password', array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Fill in your Password..')) }}
					</div>
				</div>

				<div class='form-group'>
					<div class='col-sm-offset-3 col-sm-11'>
						{{ Form::submit('Log in!',array('class'=>'btn btn-default col-md-6')) }}
					</div>
				</div>

				<div class='form-group'>
					<div class='col-sm-offset-5 col-sm-11'>
						<a href="{{ URL::route('users.create') }}">Don't have an account ?</a>
					</div>
				</div>
			{{ Form::close() }}
		</div>
	  </div>
	  <div class="col-md-4">

	  </div>
	</div>
</div>
@stop