<?php

class Item extends Eloquent {

	public function category() {
    # Item belongs to category
    # Define an inverse one-to-many relationship.
    	return $this->belongsTo('Category');
    }

    public function listContent() {

    	return $this->hasMany('ListContent');

    }
    public  function delete() {
    	$this->ListContent()->delete();
    	return parent::delete();
	}
}



