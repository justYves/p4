
@extends('_master')

@section('title')

    Sign up
    
@stop

@section('content')



<h1> Sign up</h1> <br>

@stop
@section('body')


	@foreach($errors->all() as $message)
		{{ $message }} <br>
	@endforeach



	{{ Form::open(array('url' => '/signup')) }}

	    Email<br>
	    {{ Form::text('email') }}<br><br>

	    Password:<br>
	    {{ Form::password('password') }}<br><br>

	    {{ Form::submit('Submit') }}

	{{ Form::close() }}

@stop  