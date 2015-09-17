@extends('layouts.default')

@section('content')
{{ $pagination->links() }}
@foreach(array_chunk($data->getCollection()->all(), 3) as $row)
	<div class="row">
	 	@foreach($row as $coupon)
	 	<div class="col-md-4">
	    <div class="<?= $coupon->availability == 0 ? '' : 'thumbnail' ?>">
	      <div class="<?= $coupon->availability == 0 ? '' : 'caption' ?>">
	      		
			   	@if($coupon->availability == 0)
			   	@else
			   	<p class='text-center'>{{ HTML::image('img/png/glyphicons-239-pin.png', 'alt-text',array('class'=>'img-rounded')) }}</p>

			   	<div class="row">
			   		<div class="col-sm-6">
			      	{{ HTML::image('img/'.$coupon->path, 'alt-text',array('class'=>'img-rounded', 'width' => 150, 'height' => 135)) }}
			      </div>
			      <div class="col-sm-6">
			        <!-- <div class="row"> -->
				        <!-- <div class="col-sm-9"> -->
					        <h3 class="">{{ $coupon->title }}</h3>
					        <p class="">Price: {{ round($coupon->price,2) }}€</p>
					        <p class="descr">Description: {{ $coupon->description }}</p>
				        <!-- </div> -->
				        <!-- <div class="col-md-3"> -->
				        	<p class="">Quanity: {{ $coupon->availability }}</p>
				        <!-- </div> -->

				    	<!-- </div> -->
				    </div>
		        <div class="col-sm-12">
			        @if (Auth::check())
			        	@if (Auth::user()->type == 'Customer')
			        		<!-- <p><a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-default" role="button">Print coupon {{ HTML::image('img/png/glyphicons-209-cart-out.png', 'alt-text',array('class'=>'img-rounded')) }}</a></p> -->
			        		<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal<?= $coupon->id ?>">Buy Coupon  {{ HTML::image('img/png/glyphicons-209-cart-out.png', 'alt-text',array('class'=>'img-rounded')) }}</button>

			        		<!-- MODAL -->
									<div class="modal fade" id="myModal<?= $coupon->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
									  <div class="modal-dialog">
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
									      </div>
									      <div class="modal-body">
										      <div class="row">
										      	<div class="col-sm-6">
										      		{{ HTML::image('img/'.$coupon->path, 'alt-text',array('class'=>'img-rounded')) }}
										      	</div>
										      	<div class="col-sm-6">
											        <h3 class="">{{ $coupon->title }}</h3>
											        <p class="">Price: {{ round($coupon->price,2) }}€</p>
											        <p class="">Description: {{ $coupon->description }}</p>
										        	<p class="">Quanity: {{ $coupon->availability }}</p>
											      </div>
										     </div>
									      </div>
									      <div class="modal-footer">
									        <a href="{{ URL::route('ready_to_print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-info">Confirm</a>

									      </div>
									    </div>
									  </div>
									</div>
			        	@endif
			        @endif
		    		</div>
				  </div>	
				  @endif
	    	</div>
	    </div>
	    </div>
	  @endforeach
	</div>
	@endforeach
{{ $pagination->links() }}
@stop