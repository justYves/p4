<?php

class Category extends Eloquent {

    public function item() {
    # Category has many Items
    # Define a one-to-many relationship.
    return $this->hasMany('Item');
    }


}

