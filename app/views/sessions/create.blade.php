@extends('layouts.default')

@section('content')

<!-- Grid system -->
<div class="col-md-12">
	<div class="row">

	  <div class="col-md-4">

	  </div>

	  <!-- Login space -->

	  <div class="col-md-4">
	  	<div class='thumbnail'>
	  	<h1>Sing in !</h1>
			{{ Form::open(array('class'=>'form-horizontal', 'role'=>'form')) }}
				<div class='form-group'>
					{{ Form::label('username', 'Username', array('class'=>'col-sm-3 control-label')) }}
					<div class='col-sm-9'>
						{{ Form::text('username', null, array('class'=>'form-control')) }}
					</div>
				</div>

				<div class='form-group'>
					{{ Form::label('password', 'Password', array('class'=>'col-sm-3 control-label')) }}
					<div class='col-sm-9'>
						{{ Form::password('password',array('class'=>'form-control')) }}
					</div>
				</div>

				<div class='form-group'>
					<div class='col-sm-offset-3 col-sm-9'>
						{{ Form::submit('Log in!',array('class'=>'btn btn-default col-md-12')) }}
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