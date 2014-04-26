<?php

class Student extends Eloquent {

	protected $table = 'students';

	public function course() {
		return $this->belongsTo('Course');
	}

}