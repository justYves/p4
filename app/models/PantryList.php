<?php

class PantryList extends Eloquent {

	public function user() {

   		return $this->belongsTo('User');
    }

    public function listContent() {

    	return $this->hasMany('ListContent');

    }

	public static function boot() {
    	pantryList::created(function($pantryList)
    	{

	        $items = Item::where('default','=',TRUE)->get();

	       	foreach($items as $item){

	       		$content = new listContent; 
	       		$content->pantryList()->associate($pantryList);
	 			$content->item()->associate($item);
	 			//$content->position = $item->id;
	 			$content->amount = 0;
				$content->save();      		
	       	} 

       	});

    }
		

}




