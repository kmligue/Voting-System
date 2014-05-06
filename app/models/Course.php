<?php

class Course extends Eloquent {

	protected $table = 'courses';

	public function student() {
		return $this->hasMany('Student', 'course_id');
	}

	public function position() {
		return $this->hasOne('Position');
	}

	private static function hasPosition($courseid) {
		return Position::where('courseid', '=', $courseid)->count() > 0;
	}

	public static function saveCourse() {
		$rules = array(
			'name' => 'required|unique:courses,name',
			'description' => 'required'
		);

		$credentials = array(
			'name' => Input::get('name'),
			'description' => Input::get('description')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('course/create')->withErrors($validator)->withInput();

		// start database transaction
		DB::beginTransaction();

		$course = new Course();

		try {

			$course->name = strtoupper(Input::get('name'));
			$course->description = Input::get('description');

			if(Input::has('representative')) $course->representative = Input::get('representative');

			$course->save();
		}
		catch(Exception $e) {
			DB::rollback();
			return Redirect::to('course/create')->with('msg-error', 'Error saving course.');
		}

		if(Input::has('representative')) {
			try {
				$position = new Position();

				$position->name = strtoupper($course->name) . ' - Representative';

				static::find($course->id)->position()->save($position);
			} catch (Exception $e) {
				DB::rollback();
				return Redirect::to('course/create')->with('msg-error', 'Error saving course.');
			}
		}
		
		DB::commit();

		return Redirect::to('course')->with('msg-success', 'Course successfully added!');
	}

	public static function updateCourse($id) {
		$rules = array(
			'name' => 'required',
			'description' => 'required'
		);

		$credentials = array(
			'name' => Input::get('name'),
			'description' => Input::get('description')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('course/'. $id .'/edit')->withErrors($validator)->withInput();

		// start database transaction
		DB::beginTransaction();

		$course = static::findOrFail($id);

		try {

			$course->name = strtoupper(Input::get('name'));
			$course->description = Input::get('description');

			if(Input::has('representative')) $course->representative = Input::get('representative');
			else $course->representative = 0;

			$course->save();
		}
		catch(Exception $e) {
			DB::rollback();
			return Redirect::to('course/'. $id .'/edit')->with('msg-error', 'Error saving course.');
		}

		// delete position if exist and representative is not check
		if(static::find($id)->position && !Input::has('representative')) {
			try {
				$position = Position::where('course_id', '=', $id)->delete();
			} catch (Exception $e) {
				DB::rollback();
				return Redirect::to('course/'. $id .'/edit')->with('msg-error', 'Error saving course.');
			}
		}

		// add position if not exist and representative is check
		if(!static::find($id)->position && Input::has('representative')) {
			try {
				$position = new Position();

				$position->name = strtoupper($course->name) . ' - Representative';

				static::find($id)->position()->save($position);
			} catch (Exception $e) {
				DB::rollback();
				return Redirect::to('course/'. $id .'/edit')->with('msg-error', 'Error saving course.');
			}
		}
		
		DB::commit();

		return Redirect::to('course')->with('msg-success', 'Course successfully added!');
	}

}