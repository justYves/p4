
<!-- /app/views/signup.blade.php -->
@extends('_master')

@section('title')

    Sign up
    
@stop

@section('content')

@if(isset($errors))
	<div class="alert alert-dismissable alert-warning"> <button type="button" class="close" data-dismiss="alert">×</button>
	@foreach($errors->all() as $message)
		{{ $message }} <br>
	@endforeach
	</div>
@endif

<h1> Sign up</h1> <br>

	{{ Form::open(array('url' => '/signup')) }}

	    Email<br>
	    {{ Form::text('email') }}<br><br>

	    Password:<br>
	    {{ Form::password('password') }}<br><br>

	    {{ Form::submit('Submit') }}

	{{ Form::close() }}

@stop  