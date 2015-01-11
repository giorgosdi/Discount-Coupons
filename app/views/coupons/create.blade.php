@extends('layouts.default')

@section('content')
<div class="col-md-12">
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
  <div class="thumbnail">
	<h1>Create your coupon !!</h1>
	{{ Form::open(array('route'=>'coupons.store')) }}
		<div>
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title') }}

			{{ $errors->first('title') }}
		</div>

		<div>
			{{ Form::label('description', 'Description') }}
			{{ Form::textarea('description', null, ['size' => '30x5']) }}

			{{ $errors->first('description') }}
		</div>

		<!-- No need for created field to be on the form -->
		<div>
			{{ Form::label('initial_price', 'Initial price') }}
			{{ Form::text('initial_price') }}

			{{ $errors->first('initial_price') }}
		</div>
		
		<div>
			{{ Form::label('discount_percentage', 'Discount Percentage') }}
			{{ Form::text('discount_percentage') }}

			{{ $errors->first('discount_percentage') }}
		</div>

		<div>
			{{ Form::label('price', 'Discounted Price') }}
			{{ Form::text('price') }}

			{{ $errors->first('price') }}
		</div>


		<div>
			{{ Form::label('availability', 'Number of coupons') }}
			{{ Form::text('availability') }}

			{{ $errors->first('availability') }}
		</div>

		<div>
			{{ Form::label('expiration_date', 'Expiration Date') }}
			{{ Form::input('date', 'expiration_date') }}

			{{ $errors->first('expiration_date') }}
		</div>
		<div>
			{{ Form::label('category', 'Category') }}
			
			{{ Form::select('category', $selectCategories) }}
		</div>
		
		<div>
		{{ Form::hidden('user_id',Auth::user()->id) }}
		</div>
		<div>
			{{ Form::submit('Create your coupon !') }}
	</div>
	</div>
	{{ Form::close() }}
	</div>
  <div class="col-md-4">
  </div>

</div>

<script type="text/javascript">
// completes price textbox when onChange event is fired on discount_percentage text_box
	$("#discount_percentage").change(function()
	{
		var initial_price = $("#initial_price").val();
		var discount_percentage = $("#discount_percentage").val();
		var sum = ( (initial_price * discount_percentage) / 100 );
		var final_price = initial_price - sum;
		$("#price").val(final_price);
	});
</script>
@stop