@extends('layouts.default')

@section('content')
	<h1>Create a new User !</h1>

	{{ Form::open() }}
		<div>
			{{ Form::label('username', 'Username') }}
			{{ Form::text('username') }}
		</div>

		<div>
			{{ Form::label('password', 'Password') }}
			{{ Form::text('password') }}
		</div>

		<div>
			{{ Form::label('first_name', 'First Name') }}
			{{ Form::text('first_name') }}
		</div>

		<div>
			{{ Form::label('last_name', 'Last Name') }}
			{{ Form::text('last_name') }}
		</div>

		<div>
			{{ Form::label('email', 'Email') }}
			{{ Form::text('email') }}
		</div>

		<div>
			{{ Form::label('type', 'Type') }}
			{{ Form::text('type') }}
		</div>

		<div>
			{{ Form::submit('Send your data') }}
		</div>		
	{{ Form::close() }}
@stop