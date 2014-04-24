<?php

class CourseController extends \BaseController {

	public function __construct() {

		// perform auth check
		$this->beforeFilter('auth');
		$this->beforeFilter('role', array('only' => array('edit', 'destroy')));

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$courses = Course::all();

		return View::make('server.course.index')->with('courses', $courses);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// create course form
		return View::make('server.course.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Course::saveCourse();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// show edit form
		$course = Course::findOrFail($id);

		return View::make('server.course.edit')->with('course', $course);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// update course
		return Course::updateCourse($id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		// delete course
		try {
			$course = Course::findOrFail($id);

			$course->delete();
		} catch (Exception $e) {
			return Redirect::to('course')->with('msg-error', 'Error deleting account.');
		}

		if($course) return Redirect::to('course')->with('msg-success', 'Account successfully deleted!');
		else return Redirect::to('course')->with('msg-error', 'Error deleting account.');
	}


}
