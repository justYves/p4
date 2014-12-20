<?php

class Item extends Eloquent {

	public function category() {
    # Item belongs to category
    # Define an inverse one-to-many relationship.
    return $this->belongsTo('Category');
    }
}



