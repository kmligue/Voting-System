<?php

class Position extends Eloquent {

	protected $table = 'positions';

	public function course() {
		return $this->belongsTo('course');
	}

	public static function savePosition() {
		$rules = array(
			'name' => 'required|alpha_dash',
			'ordinality' => 'required|integer|unique:positions,ordinality'
		);

		$credentials = array(
			'name' => Input::get('name'),
			'ordinality' => Input::get('ordinality')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('position/create')->withErrors($validator)->withInput();

		$position = new self;

		$position->name = ucwords(Input::get('name'));
		$position->ordinality = Input::get('ordinality');

		$position->save();

		if($position) return Redirect::to('position')->with('msg-success', 'Position successfully added!');
		else return Redirect::to('position/create')->with('msg-error', 'Error saving position.');
	}

	public static function updatePosition($id) {
		$rules = array(
			'name' => 'required|alpha_dash',
			'ordinality' => 'required|integer|unique:positions,ordinality,' . $id
		);

		$credentials = array(
			'name' => Input::get('name'),
			'ordinality' => Input::get('ordinality')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('position/' . $id . '/edit')->withErrors($validator)->withInput();

		$position = Position::findOrFail($id);

		$position->name = ucwords(Input::get('name'));
		$position->ordinality = Input::get('ordinality');

		$position->save();

		if($position) return Redirect::to('position')->with('msg-success', 'Position successfully added!');
		else return Redirect::to('position/' . $id . '/edit')->with('msg-error', 'Error saving position.');
	}
}

?>