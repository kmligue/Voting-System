<?php

class Candidate extends Eloquent {

	protected $table = 'candidates';

	public function student() {
		return $this->belongsTo('Student');
	}

	public function position() {
		return $this->belongsTo('Position');
	}

	public static function saveCandidate() {
		$rules = array(
			'image' => 'required|image',
			'student' => 'required|unique:candidates,student_id',
			'position' => 'required'
		);

		$credentials = array(
			'image' => Input::file('image'),
			'student' => Input::get('studentid'),
			'position' => Input::get('positionid')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('candidate/create')->withErrors($validator)->withInput();

		$destination = public_path() . '/assets/images/';

		$uploaded = Input::file('image')->move($destination, Input::file('image')->getClientOriginalName());

		if($uploaded) {
			$candidate = new self;

			$candidate->student_id = Input::get('studentid');
			$candidate->position_id = Input::get('positionid');
			$candidate->imagepath = '/assets/images/' . Input::file('image')->getClientOriginalName();

			$candidate->save();

			if($candidate) return Redirect::to('candidate')->with('msg-success', 'Candidate successfully saved!');
			else return Redirect::to('candidate/create')->with('msg-error', 'Error saving data!');
		}
		else {
			return Redirect::to('candidate/create')->with('msg-error', 'Error uploading image!');
		}
	}

	public static function updateCandidate($id) {
		$rules = array(
			'image' => 'image',
			'position' => 'required'
		);

		$credentials = array(
			'image' => Input::file('image'),
			'position' => Input::get('positionid')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('candidate/' . $id . '/edit')->withErrors($validator)->withInput();

		$destination = public_path() . '/assets/images/';

		$candidate = static::findOrFail($id);

		if (Input::hasFile('image')) {
			$uploaded = Input::file('image')->move($destination, Input::file('image')->getClientOriginalName());

			if($uploaded) {
				$candidate->imagepath = '/assets/images/' . Input::file('image')->getClientOriginalName();
			}
			else {
				return Redirect::to('candidate/' . $id . '/edit')->with('msg-error', 'Error uploading image!');
			}
		}

		$candidate->position_id = Input::get('positionid');

		$candidate->save();

		if($candidate) return Redirect::to('candidate')->with('msg-success', 'Candidate successfully updated!');
		else return Redirect::to('candidate/' . $id . '/edit')->with('msg-error', 'Error saving data!');
	}

}