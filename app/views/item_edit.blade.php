
@extends('_master')

@section('title')

	Add a new item

@stop

@section('content')

<h1> Edit {{$item['name']}}

</h1> <br>
 
@stop
@section('body')

	{{ Form::open(array('url' => '/item/edit')) }}


		{{ Form::label('name','Item Name') }}
		{{ Form::text('name',$item['name']) }}<br><br>

		{{ Form::label('amount','Amount') }}
		{{ Form::text('amount', $content['amount']) }}<br><br>


		{{ Form::hidden('category_id',$item['category']['id'])}}
		{{ Form::hidden('item_id',$item['id'])}}
		{{ Form::hidden('user_id',$list['user_id'])}}
		{{ Form::hidden('pantry_id',$list['id'])}}
		{{ Form::hidden('content_id',$content['id'])}}


	{{ Form::submit('Save') }}

	{{ Form::close() }}


		{{ Form::open(array('url' => '/item/delete')) }}
		{{ Form::hidden('item_id',$item['id'])}}
		{{ Form::hidden('content_id',$content['id'])}}
		{{Form::submit('Delete')}}
		{{ Form::close() }}

@stop



	