<?php

class StudentController extends \BaseController {

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
		$students = Student::with('course')->get();

		return View::make('server.student.index')->with('students', $students);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// show add student form

		$courses = Course::all();

		return View::make('server.student.create')->with('courses', $courses);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Student::saveStudent();
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
		$student = Student::findOrFail($id);
		$courses = Course::all();
		
		return View::make('server.student.edit')->with('student', $student)->with('courses', $courses);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return Student::updateStudent($id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		try {
			$student = Student::findOrFail($id);

			$student->delete();
		} catch (Exception $e) {
			return Redirect::to('student')->with('msg-error', 'Error deleting student.');
		}

		return Redirect::to('student')->with('msg-success', 'Student successfully deleted!');
	}


}
