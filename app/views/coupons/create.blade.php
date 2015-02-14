@extends('layouts.default')

@section('content')
<div class="col-md-12">
  <div class="col-md-4">

  </div>
  <div class="panel panel-default">
  <div class="panel-body">
	<h1 class="text-center">Create your coupon !!</h1>
	{{ Form::open(array('route'=>'coupons.store', 'class'=>'form-horizontal', 'role'=>'form', 'files'=>true)) }}
		<div class='form-group'>
			<!-- {{ Form::label('title', 'Title', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
				{{ Form::text('title', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Title')) }}
			</div>
			{{ $errors->first('title') }}
		</div>

		<div class='form-group'>
			<!-- {{ Form::label('description', 'Description', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			{{ Form::textarea('description', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Description...')) }}
			</div>
			{{ $errors->first('description') }}
		</div>

		<!-- No need for created field to be on the form -->
		<div class='form-group'>
			<!-- {{ Form::label('initial_price', 'Initial price', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			{{ Form::text('initial_price', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Initial price')) }}
			</div>
			{{ $errors->first('initial_price') }}
		</div>
		
		<div class='form-group'>
			<!-- {{ Form::label('discount_percentage', 'Discount Percentage', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			{{ Form::text('discount_percentage', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Discount %')) }}
			</div>
			{{ $errors->first('discount_percentage') }}
		</div>

		<div class='form-group'>
			<!-- {{ Form::label('price', 'Discounted Price', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			{{ Form::text('price', null, array('readonly'=>'readonly', 'class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Discounted price')) }}
			</div>
			{{ $errors->first('price') }}
		</div>


		<div class='form-group'>
			<!-- {{ Form::label('availability', 'Number of coupons', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			{{ Form::text('availability', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Quanity')) }}
			</div>
			{{ $errors->first('availability') }}
		</div>

		<div class='form-group'>
			<!-- {{ Form::label('expiration_date', 'Expiration Date', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			{{ Form::input('date', 'expiration_date', null, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Expiration date')) }}
			</div>
			{{ $errors->first('expiration_date') }}
		</div>

		<div class='form-group'>
			<!-- {{ Form::label('image', 'Image', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			<span class="col-sm-offset-6 col-sm-9">
			{{ Form::file('image', null, array('class'=>'form-control col-sm-offset-2 col-sm-9')) }}
			</span>
			</div>
		</div>

		<div class='form-group'>
			<!-- {{ Form::label('category', 'Category', array('class'=>'col-sm-3 control-label')) }} -->
			<div class='col-sm-9'>
			{{ Form::select('category', $selectCategories,null, array('class'=>'form-control col-sm-offset-2 col-sm-9', 'placeholder'=>'Category')) }}
			</div>
		</div>
		
		<div>
		{{ Form::hidden('user_id',Auth::user()->id) }}
		</div>
		<div class='form-group'>
			<div class='col-sm-offset-4 col-sm-9'>
			{{ Form::submit('Create your coupon !', array('class'=>'btn btn-default col-md-6')) }}
			</div>
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