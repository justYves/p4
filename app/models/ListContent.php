<?php

class ListContent extends Eloquent {

	public function pantryList() {

    	return $this->belongsTo('PantryList');

    }

    public function item() {

    	return $this->belongsTo('Item');
    	
    }
}



