@extends('layouts.default')

@section('content')
<div class="col-md-4">
		<div class="row">
			<div class="col-sm-12 col-md-12">
			
			 	@foreach($new_coupons as $coupon)
			    <div class="thumbnail">
			      {{ HTML::image('img/coupon.jpg', 'alt-text') }}
			      <div class="caption">
			        <h3>{{ $coupon->title }}</h3>
			        <p>{{ $coupon->price }}$</p>
			        @if (Auth::check())
			        	@if (Auth::user()->type == 0)
			        		<p><a href="{{ URL::route('print', array('id'=>$coupon->id)) }}" class="btn btn-primary" role="button">Print coupon</a>
			        	@endif
			        @endif
			      </div>
			    </div>
		    	@endforeach
	  		</div>
		</div>
	</div>
@stop