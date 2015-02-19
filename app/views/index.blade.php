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
					   	<p class='text-center'>{{ HTML::image('img/png/glyphicons-239-pin.png', 'alt-text',array('class'=>'img-rounded')) }}</p>

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
											        <a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-info">Confirm</a>

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
		    @endforeach
			</div>
		</div>
	</div>
	<div class="col-md-4" id='lb1'>
		<div class="row">
			<div class="col-sm-12 col-md-12">
			
			 	@foreach($data2 as $coupon)
			    <div class="<?= $coupon->availability == 0 ? '' : 'thumbnail' ?>">
			      <div class="<?= $coupon->availability == 0 ? '' : 'caption' ?>">
			      		
					   	@if($coupon->availability == 0)
					   	@else
					   	<p class='text-center'>{{ HTML::image('img/png/glyphicons-239-pin.png', 'alt-text',array('class'=>'img-rounded')) }}</p>

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
											        <a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-info">Confirm</a>
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
					   	<p class='text-center'>{{ HTML::image('img/png/glyphicons-239-pin.png', 'alt-text',array('class'=>'img-rounded')) }}</p>

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
											      <div class="modal-body" id="print<?= $coupon->id ?>" runat="server">
												      <div class="row" id='lb2'>
												      	<div class="col-sm-6">
												      		{{ HTML::image('img/'.$coupon->path, 'alt-text',array('class'=>'img-rounded', 'id'=>'image')) }}
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
											        <a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id )) }}" class="btn btn-info">Confirm</a>

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
		    @endforeach
			</div>
		</div>
	</div>
</div>
@stop