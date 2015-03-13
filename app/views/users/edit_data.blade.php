@extends('layouts.default')
@section('content')
<div class="col-md-12">
  <div class="col-md-4">

  </div>
  <div class="panel panel-default"> 
  <div class="panel-body">
    <h1 class="text-center">Update your info !</h1>

    {{ Form::open(array('route'=>'users.update', 'method' => 'put', 'class'=>'form-horizontal', 'role'=>'form')) }}
      <div class='form-group'>
        <!-- {{ Form::label('username', 'Username') }} -->
        <div class='col-sm-9'>
          {{ Form::text('username', Auth::user()->username, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9')) }}
        </div>
        {{ $errors->first('username') }}
      </div>

      <div class='form-group'>
        <!-- {{ Form::label('first_name', 'First Name') }} -->
        <div class='col-sm-9'>
          {{ Form::text('first_name', Auth::user()->first_name, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9')) }}
        </div>
      </div>

      <div class='form-group'>
        <!-- {{ Form::label('last_name', 'Last Name') }} -->
        <div class='col-sm-9'>
          {{ Form::text('last_name', Auth::user()->last_name, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9')) }}
        </div>
      </div>

      <div class='form-group'>
        <!-- {{ Form::label('email', 'Email') }} -->
        <div class='col-sm-9'>
          {{ Form::text('email', Auth::user()->email, array('class'=>'form-control text-center col-sm-offset-2 col-sm-9')) }}
        </div>

        {{ $errors->first('email') }}
      </div>


      <div class="form-group">
        <div class='col-sm-offset-3 col-sm-11'>
          {{ Form::submit('Send your data', array('class'=>'btn btn-default col-md-6'))  }}
        </div>
      </div>    
    {{ Form::close() }}
  </div>
  </div>
    <div class="col-md-4">

    </div>
</div>
@stop