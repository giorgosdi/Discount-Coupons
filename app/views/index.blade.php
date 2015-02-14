@extends('layouts.default')

@section('content')
<div class="row">
	<div class="col-md-4">
		<div class="row">
			<div class="col-sm-12 col-md-12">
			
			 	@foreach($data1 as $coupon)
			    <div class="<?= $coupon->availability == 0 ? '' : 'thumbnail' ?>">
			      <div class="<?= $coupon->availability == 0 ? '' : 'caption' ?>">
			      		
					   	@if($coupon->availability == 0)
					   	@else
					   	<div class="row">
					   		<div class="col-sm-6">
					      	{{ HTML::image('img/'.$coupon->path, 'alt-text',array('class'=>'img-rounded')) }}
					      </div>
					      <div class="col-sm-6">
					        <!-- <div class="row"> -->
						        <!-- <div class="col-sm-9"> -->
							        <h3 class="">{{ $coupon->title }}</h3>
							        <p class="">Price: {{ round($coupon->price,2) }}€</p>
							        <p class="">Description: {{ $coupon->description }}</p>
						        <!-- </div> -->
						        <!-- <div class="col-md-3"> -->
						        	<p class="">Quanity: {{ $coupon->availability }}</p>
						        <!-- </div> -->

						    	<!-- </div> -->
						    </div>
				        <div class="col-sm-12">
					        @if (Auth::check())
					        	@if (Auth::user()->type == 0)
					        		<p><a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-primary" role="button">Print coupon</a></p>
					        	@endif
					        @endif
				    		</div>
						   </div>	
						    @endif
			    	</div>
			    </div>
		    @endforeach
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-sm-12 col-md-12">
			
			 	@foreach($data2 as $coupon)
			    <div class="<?= $coupon->availability == 0 ? '' : 'thumbnail' ?>">
			      <div class="<?= $coupon->availability == 0 ? '' : 'caption' ?>">
			      		
					   	@if($coupon->availability == 0)
					   	@else
					   	<div class="row">
					   		<div class="col-sm-6">
					      	{{ HTML::image('img/'.$coupon->path, 'alt-text',array('class'=>'img-rounded')) }}
					      </div>
					      <div class="col-sm-6">
					        <!-- <div class="row"> -->
						        <!-- <div class="col-sm-9"> -->
							        <h3 class="">{{ $coupon->title }}</h3>
							        <p class="">Price: {{ round($coupon->price,2) }}€</p>
							        <p class="">Description: {{ $coupon->description }}</p>
						        <!-- </div> -->
						        <!-- <div class="col-md-3"> -->
						        	<p class="">Quanity: {{ $coupon->availability }}</p>
						        <!-- </div> -->

						    	<!-- </div> -->
						    </div>
				        <div class="col-sm-12">
					        @if (Auth::check())
					        	@if (Auth::user()->type == 0)
					        		<p><a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-primary" role="button">Print coupon</a></p>
					        	@endif
					        @endif
				    		</div>
						   </div>	
						    @endif
			    	</div>
			    </div>
		    @endforeach
			</div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="row">
			<div class="col-sm-12 col-md-12">
			
			 	@foreach($data3 as $coupon)
			    <div class="<?= $coupon->availability == 0 ? '' : 'thumbnail' ?>">
			      <div class="<?= $coupon->availability == 0 ? '' : 'caption' ?>">
			      		
					   	@if($coupon->availability == 0)
					   	@else
					   	<div class="row">
					   		<div class="col-sm-6">
					      	{{ HTML::image('img/'.$coupon->path, 'alt-text',array('class'=>'img-rounded')) }}
					      </div>
					      <div class="col-sm-6">
					        <!-- <div class="row"> -->
						        <!-- <div class="col-sm-9"> -->
							        <h3 class="">{{ $coupon->title }}</h3>
							        <p class="">Price: {{ round($coupon->price,2) }}€</p>
							        <p class="">Description: {{ $coupon->description }}</p>
						        <!-- </div> -->
						        <!-- <div class="col-md-3"> -->
						        	<p class="">Quanity: {{ $coupon->availability }}</p>
						        <!-- </div> -->

						    	<!-- </div> -->
						    </div>
				        <div class="col-sm-12">
					        @if (Auth::check())
					        	@if (Auth::user()->type == 0)
					        		<p><a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-primary" role="button">Print coupon</a></p>
					        	@endif
					        @endif
				    		</div>
						   </div>	
						    @endif
			    	</div>
			    </div>
		    @endforeach
			</div>
		</div>
	</div>
</div>
@stop