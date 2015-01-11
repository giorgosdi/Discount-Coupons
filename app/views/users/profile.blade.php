@extends('layouts.default')

@section('content')
<div class="table">
  <table class="table table-hover">
  	<thead>
  		<tr>
  			<th>Info</th>
  			<th>Value</th>
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
  			<td>giwrgos</td>
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
  			<td>{{ $user->convert_type(Auth::user()->type) }}</td>
  		</tr>
  		<tr>
  			<td>Avatar</td>
  			<td>giwrgos</td>
  		</tr>
    
  	</tbody>
  </table>
</div>
<div class="panel panel-primary">
    <div class="panel-heading"><?= Auth::user()->type == 0 ? "Coupons printed by you !" : "Coupons posted by you !" ?></div>
    <div class="panel-body">
      <div class="col-md-6">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            @foreach($data1 as $coupon)
                <div class="thumbnail">
                  {{ HTML::image('img/coupon.jpg', 'alt-text') }}
                    <h3>{{ $coupon->title }}</h3>
                    <p>{{ $coupon->price }}$</p>  
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
                  {{ HTML::image('img/coupon.jpg', 'alt-text') }}
                    <h3>{{ $coupon->title }}</h3>
                    <p>{{ $coupon->price }}$</p>  
                </div>
            @endforeach
          </div>
        </div>
      </div>
    </div> 
</div>
@stop