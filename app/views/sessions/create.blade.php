@extends('layouts.default')

@section('content')
	<h1>Log in !</h1>

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
			{{ Form::submit('Log in!') }}
		</div>
	{{ Form::close() }}
@stop