@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="row">
			  <div class="col-sm-12 col-md-12">
			 	@foreach($data as $coupon)
			    <div class="thumbnail">
			      {{ HTML::image('img/coupon.jpg', 'alt-text') }}
			      <div class="caption">
			        <h3>{{ $coupon->title }}</h3>
			        <p>{{ $coupon->price }}$</p>
			        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
			      </div>
			    </div>
		    	@endforeach
	  		</div>
		</div>
	</div>
</div>

@stop