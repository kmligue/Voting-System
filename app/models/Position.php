<?php

class Position extends Eloquent {

	protected $table = 'positions';

	public function course() {
		return $this->belongsTo('course');
	}
}

?>