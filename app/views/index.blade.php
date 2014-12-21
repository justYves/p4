
@extends('_master')

@section('title')

    Welcome

@stop



@section('content')

<h1> Welcome to P4!</h1> <br>

@stop
@section('body')
    @if(Auth::check())
    	@foreach($categories as $category)
		    <div class="panel panel-success">
		  		<div class="panel-heading">
		    		<h3 class="panel-title">{{$category['name']}}</h3>
		  		</div>
		  			
		  			<ul class="list-group">
					@foreach($items as $item)
						@if($item['item']['category_id']==$category->id)
							  	<li class="list-group-item">
							    <span class="badge"> {{$item['amount']}}</span>
							     <a href='item/edit/{{$item['item']['id']}}'> {{$item['item']['name']}} 
				 				</a>
							  </li>
						@endif
					@endforeach
							  	<li class="list-group-item">
							     <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href='item/create/{{$category['id']}}'> Add item
				 				</a>
							  </li>
			</div>
		@endforeach

	@endif
@stop

