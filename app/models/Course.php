<?php

class Course extends Eloquent {

	protected $table = 'courses';

	public static function saveCourse() {
		$rules = array(
			'name' => 'required',
			'description' => 'required'
		);

		$credentials = array(
			'name' => Input::get('name'),
			'description' => Input::get('description')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('course/create')->withErrors($validator)->withInput();

		$course = new Course();

		$course->name = Input::get('name');
		$course->description = Input::get('description');

		if(Input::has('representative')) $course->representative = Input::get('representative');

		$course->save();

		if($course) return Redirect::to('course')->with('msg-success', 'Course successfully added!');
		else return Redirect::to('course/create')->with('msg-error', 'Error saving course.');
	}

}