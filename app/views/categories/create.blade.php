@extends('layouts.default')

@section('content')
<div class="col-md-12">
  <div class="col-md-4">

  </div>
	<div class="col-md-4">	
	<div class="thumbnail">
		<h1>Create a new category !</h1>

		{{ Form::open(array('route'=>'categories.store')) }}
			<div>
				{{ Form::label('title', 'Title') }}
				{{ Form::text('title') }}

				{{ $errors->first('title') }}
			</div>
			<div>
				{{ Form::submit('Send your data') }}
			</div>		
		{{ Form::close() }}
	</div>
	</div>

@stop