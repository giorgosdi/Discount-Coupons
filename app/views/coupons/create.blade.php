@extends('layouts.default')

@section('content')
	<h1>Create your coupon !!</h1>
	{{ Form::open() }}
		<div>
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title') }}
		</div>

		<div>
			{{ Form::label('description', 'Description') }}
			{{ Form::textarea('description', null, ['size' => '30x5']) }}
		</div>

		<!-- No need for created field to be on the form -->

		<div>
			{{ Form::label('price', 'Initial Price') }}
			{{ Form::text('price') }}
		</div>

		<div>
			{{ Form::label('discount_percentage', 'Discount Percentage') }}
			{{ Form::text('discount_percentage') }}
		</div>

		<div>
			{{ Form::label('availability', 'Number of coupons') }}
			{{ Form::text('availability') }}
		</div>

		<div>
			{{ Form::label('expiration_date', 'Expiration Date') }}
			{{ Form::input('date', 'expiration_date') }}
		</div>

		<div>
			{{ Form::submit('Create your coupon !') }}
		</div>
	{{ Form::close() }}
@stop