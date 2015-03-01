@extends('layouts.default')

@section('content')
<div class="table">
  <table class="table table-hover">
  	<thead>
  		<tr>
  			<th>Info</th>
  			<th>Value</th>
        <th><a href="">Edit</a></th>
  		</tr>
  	</thead>
    <?php $user= new User ?>
  	<tbody>
    
  		<tr>
  			<td>username</td>
  			<td>{{Auth::user()->username}}</td>
  		</tr>
  		<tr>
  			<td>password</td>
  			<td>{{Auth::user()->password}}</td>
  		</tr>
  		<tr>
  			<td>First Name</td>
  			<td>{{ Auth::user()->first_name }}</td>
  		</tr>
  		<tr>
  			<td>Last Name</td>
  			<td>{{ Auth::user()->last_name }}</td>
  		</tr>
  		<tr>
  			<td>Email</td>
  			<td>{{ Auth::user()->email }}</td>
  		</tr>
  		<tr>
  			<td>Type</td>
  			<td>{{ Auth::user()->type }}</td>
        <!-- change the above to Auth::user()->type -->
  		</tr>
    
  	</tbody>
  </table>
</div>
<!-- table ends -->
<div class="panel panel-primary">
    <div class="panel-heading"><?= Auth::user()->type == 0 ? "Coupons printed by you !" : "Coupons posted by you !" ?></div>
    <div class="panel-body">
      <div class="col-md-6">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            @foreach($data1 as $coupon)
                <div class="thumbnail">
                  {{ HTML::image('img/'.$coupon->path, $coupon->title,array('class'=>'img-rounded', 'width' => 150, 'height' => 135)) }}
                    <h3>{{ $coupon->title }}</h3>
                    <p>{{ round($coupon->price,2) }} €</p>  
                    @if(Auth::check())
                      @if(Auth::user()->type == 'Customer')
                        <p>{{ $coupon->pivot->hash }}</p>

                        <a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id, 'hash' => $coupon->pivot->hash )) }}">Print</a>
                      @endif
                    @endif
                </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            @foreach($data2 as $coupon)
                <div class="thumbnail">
                  {{ HTML::image('img/'.$coupon->path, $coupon->title,array('class'=>'img-rounded', 'width' => 150, 'height' => 135)) }}
                    <h3>{{ $coupon->title }}</h3>
                    <p>{{ round($coupon->price,2) }} €</p>  
                    @if(Auth::check())
                      @if(Auth::user()->type == 'Customer')
                        <p>{{ $coupon->pivot->hash }}</p>

                        <a href="{{ URL::route('print', array('id'=>$coupon->id, 'user_id' => Auth::user()->id, 'hash' => $coupon->pivot->hash )) }}">Print</a>
                      @endif
                    @endif
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div> 
</div>
<!-- coupons details end -->
@if(Auth::user()->type == 0)
  <div class="panel panel-info">
    <div class="panel-heading">Saved money</div>
    <div class="panel-body">
      <div>Initial money: {{round($initial_money,2)}} €</div>
      <div>Money you spent: {{round($money_spent,2)}} €</div>
      <div>Money you saved so far: {{ round($initial_money-$money_spent,2) }} €</div>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="<?= $prog_bar ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?= $prog_bar ?>%">
          {{ round($prog_bar,2)."%" }}
        </div>
      </div>
    </div>
  </div>
@endif
@stop