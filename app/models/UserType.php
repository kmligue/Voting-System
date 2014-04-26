<?php

class UserType extends Eloquent {

	protected $table = 'usertypes';

	public function user() {
		return $this->hasMany('User', 'usertype_id');
	}

}