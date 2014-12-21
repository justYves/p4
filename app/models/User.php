<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function pantryList() {

    	return $this->hasMany('PantryList');
    }

    public static function boot() {
    	user::created(function($user)
    	{
    		$list = new PantryList; 
			$list->name = $user->first_name."'s List";
			$list->user()->associate($user);
			$list->save();
    	});
    }
}
