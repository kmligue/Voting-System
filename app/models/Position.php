<?php

class Position extends Eloquent {

	protected $table = 'positions';

	public function course() {
		return $this->belongsTo('course');
	}

	public function candidate() {
		return $this->hasMany('Candidate');
	}

	public static function savePosition() {
		$rules = array(
			'name' => 'required|alpha_dash',
			'ordinality' => 'integer|unique:positions,ordinality',
			'top' => 'required|integer'
		);

		$credentials = array(
			'name' => Input::get('name'),
			'ordinality' => Input::get('ordinality'),
			'top' => Input::get('top')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('position/create')->withErrors($validator)->withInput();

		$position = new self;

		$position->name = ucwords(Input::get('name'));
		$position->ordinality = Input::get('ordinality');
		$position->top = Input::get('top');

		$position->save();

		if($position) return Redirect::to('position')->with('msg-success', 'Position successfully added!');
		else return Redirect::to('position/create')->with('msg-error', 'Error saving position.');
	}

	public static function updatePosition($id) {
		$rules = array(
			'name' => 'required|alpha_dash',
			'ordinality' => 'required|integer|unique:positions,ordinality,' . $id,
			'top' => 'required|integer'
		);

		$credentials = array(
			'name' => Input::get('name'),
			'ordinality' => Input::get('ordinality'),
			'top' => Input::get('top')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('position/' . $id . '/edit')->withErrors($validator)->withInput();

		$position = Position::findOrFail($id);

		$position->name = ucwords(Input::get('name'));
		$position->ordinality = Input::get('ordinality');
		$position->top = Input::get('top');

		$position->save();

		if($position) return Redirect::to('position')->with('msg-success', 'Position successfully added!');
		else return Redirect::to('position/' . $id . '/edit')->with('msg-error', 'Error saving position.');
	}
}

?>