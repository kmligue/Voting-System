<?php

class Student extends Eloquent {

	protected $table = 'students';

	public function course() {
		return $this->belongsTo('Course');
	}

	public function candidate() {
		return $this->hasMany('Candidate');
	}

	public static function saveStudent() {
		$rules = array(
			'name' => 'required|alpha_spaces|unique:students,fname,null,id,mname,'.Input::get('mname').',lname,'.Input::get('lname'),
			'middle name' => 'alpha_spaces',
			'last name' => 'required|alpha_spaces',
			'course' => 'required'
		);

		$credentials = array(
			'name' => Input::get('fname'),
			'middle name' => Input::get('mname'),
			'last name' => Input::get('lname'),
			'course' => Input::get('courseid')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('student/create')->withErrors($validator)->withInput();

		$student = new Student();

		$student->course_id = Input::get('courseid');
		$student->fname = Input::get('fname');
		$student->mname = Input::get('mname');
		$student->lname = Input::get('lname');

		$student = Course::find(Input::get('courseid'))->student()->save($student);

		if($student) return Redirect::to('student')->with('msg-success', 'Student successfully saved!');
		else return Redirect::to('student/create')->with('msg-error', 'Error saving data!');
	}

	public static function updateStudent($id) {
		$rules = array(
			'name' => 'required|alpha_spaces|unique:students,fname,'. $id .',id,mname,'.Input::get('mname').',lname,'.Input::get('lname'),
			'middle name' => 'alpha_spaces',
			'last name' => 'required|alpha_spaces',
			'course' => 'required'
		);

		$credentials = array(
			'name' => Input::get('fname'),
			'middle name' => Input::get('mname'),
			'last name' => Input::get('lname'),
			'course' => Input::get('courseid')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('student/'. $id .'/edit')->withErrors($validator)->withInput();

		// get student
		$student = static::findOrFail($id);

		$student->course_id = Input::get('courseid');
		$student->fname = Input::get('fname');
		$student->mname = Input::get('mname');
		$student->lname = Input::get('lname');

		$student = Course::find(Input::get('courseid'))->student()->save($student);

		if($student) return Redirect::to('student')->with('msg-success', 'Student successfully updated!');
		else return Redirect::to('student/'. $id .'/create')->with('msg-error', 'Error saving data!');
	}

}