@extends('layouts.default')

@section('content')
<div class="row">
  <div class="col-md-4">
	<div class="row">
	  <div class="col-sm-12 col-md-12">
	    <div class="thumbnail">
	      {{ HTML::image('img/coupon.jpg', 'alt-text') }}
	      <div class="caption">
	        <h3>Pizza coupons</h3>
	        <p>12$</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	    <div class="thumbnail">
	      {{ HTML::image('img/coupon.jpg', 'alt-text') }}
	      <div class="caption">
	        <h3>Pizza coupons</h3>
	        <p>12$</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	  </div>
	</div>
  </div>
  <div class="col-md-4">
	<div class="row">
	  <div class="col-sm-12 col-md-12">
	    <div class="thumbnail">
	      {{ HTML::image('img/coupon.jpg', 'alt-text') }}
	      <div class="caption">
	        <h3>Pizza coupons</h3>
	        <p>12$</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	  </div>
	</div>
  </div>
  <div class="col-md-4">
	<div class="row">
	  <div class="col-sm-12 col-md-12">
	    <div class="thumbnail">
	      {{ HTML::image('img/coupon.jpg', 'alt-text') }}
	      <div class="caption">
	        <h3>Pizza coupons</h3>
	        <p>12$</p>
	        <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
	      </div>
	    </div>
	  </div>
	</div>
  </div>
</div>

@stop