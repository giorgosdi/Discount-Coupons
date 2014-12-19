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
  			<td>{{ Auth::user()->type }}</td>
  		</tr>
  		<tr>
  			<td>Avatar</td>
  			<td>giwrgos</td>
  		</tr>
    
  	</tbody>
  </table>
</div>
@stop