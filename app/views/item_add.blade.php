
@extends('_master')

@section('title')

	Add a new item

@stop

@section('content')

<h1> Add a new item in the

{{$category['name']}}

     Category

</h1> <br>
 
@stop

@section('body')

	{{ Form::open(array('url' => '/item/store')) }}


		{{ Form::label('name','Item Name') }}
		{{ Form::text('name'); }}<br><br>

		{{ Form::label('amount','Amount') }}
		{{ Form::text('amount',0); }}<br><br>

		{{ Form::hidden('category_id',$category['id'])}}
		{{ Form::hidden('pantry_id',$list['id'])}}

	{{ Form::submit('Add'); }}

	{{ Form::close() }}


@stop



	