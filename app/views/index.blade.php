
@extends('_master')

@section('title')

    Welcome

@stop



@section('content')

<h1> Welcome to P4!</h1> <br>
    @if(Auth::check())
    	@foreach($categories as $category)
		    <div class="panel panel-success">
		  		<div class="panel-heading">
		    		<h3 class="panel-title">{{$category['name']}}</h3>
		  		</div>
					@foreach($items as $item)
						@if($item['item']['category_id']==$category->id)
							<ul class="list-group">
							  	<li class="list-group-item">
							    <span class="badge"> {{$item['amount']}}</span>
							     <a href='item/{{$item['item']['id']}}/edit/'> {{$item['item']['name']}} 
				 				</a>
							  </li>
							</ul>
						@endif
					@endforeach
			</div>
		@endforeach

	@endif
@stop

