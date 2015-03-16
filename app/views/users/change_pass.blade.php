@extends('layouts.default')
@section('content')
<div class="col-md-12">
  <div class="col-md-4">

  </div>
  <div class="panel panel-default"> 
  <div class="panel-body">
    <h1 class="text-center">Change your password !</h1>
    {{ Form::open(array('route'=>'users.update_pass', 'method'=>'put', 'class'=>'form-horizontal', 'role'=>'form')) }}

      <div class='form-group'>
        <!-- {{ Form::label('password', 'Password') }} -->
        <div class='col-sm-9'>
          {{ Form::password('old_password', array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Type your old password..')) }}
        </div>

      </div>

      <div class='form-group'>
        <!-- {{ Form::label('password', 'Password') }} -->
        <div class='col-sm-9'>
          {{ Form::password('new_password', array('class'=>'form-control text-center col-sm-offset-2 col-sm-9', 'placeholder'=>'Type your new password..')) }}
        </div>

      </div>

      {{Form::hidden('id', Auth::user()->id)}}

      <div class="form-group">
        <div class='col-sm-offset-3 col-sm-11'>
          {{ Form::submit('Change password', array('class'=>'btn btn-default col-md-6'))  }}
        </div>
      </div>    

    {{ Form::close() }}

    

  </div>
  </div>
    <div class="col-md-4">

    </div>
</div>
@stop