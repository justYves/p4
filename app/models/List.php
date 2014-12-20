<?php

class List extends Eloquent {

	public function user() {
    # Item belongs to category
    # Define an inverse one-to-many relationship.
    return $this->belongsTo('User');
    }
}



