@extends('layouts.default')

@section('content')
<div class="col-md-12">
  <div class="col-md-4">

  </div>
	<div class="panel panel-default">	
	<div class="panel-body">
		<h1 class="text-center">Create a new User !</h1>

		{{ Form::open(array('route'=>'users.store', 'class'=>'form-horizontal', 'role'=>'form')) }}
			<div class='form-group'>
				<!-- {{ Form::label('username', 'Username') }} -->
				<div class='col-sm-9'>
					{{ Form::text('username', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Username')) }}
				</div>
				{{ $errors->first('username') }}
			</div>

			<div class='form-group'>
				<!-- {{ Form::label('password', 'Password') }} -->
				<div class='col-sm-9'>
					{{ Form::password('password', array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Password')) }}
				</div>
				{{ $errors->first('password') }}
			</div>

			<div class='form-group'>
				<!-- {{ Form::label('first_name', 'First Name') }} -->
				<div class='col-sm-9'>
					{{ Form::text('first_name', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'First name')) }}
				</div>
			</div>

			<div class='form-group'>
				<!-- {{ Form::label('last_name', 'Last Name') }} -->
				<div class='col-sm-9'>
					{{ Form::text('last_name', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Last name')) }}
				</div>
			</div>

			<div class='form-group'>
				<!-- {{ Form::label('email', 'Email') }} -->
				<div class='col-sm-9'>
					{{ Form::text('email', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Email')) }}
				</div>

				{{ $errors->first('email') }}
			</div>

			<div class='form-group'>
				<!-- {{ Form::label('type', 'Type') }} -->
				<div class='col-sm-9'>
						{{ Form::select('type', array('Customer' => 'Customer', 'Professional' => 'Professional'),null, array('class'=>'form-control col-sm-offset-2 col-sm-9', 'placeholder'=>'Category')) }}
				</div>
			</div>

			<div class="form-group">
				<div class='col-sm-offset-3 col-sm-11'>
					{{ Form::submit('Send your data', array('class'=>'btn btn-default col-md-6'))  }}
				</div>
			</div>		
		{{ Form::close() }}
	</div>
	</div>
	  <div class="col-md-4">

	  </div>
</div>
@stop