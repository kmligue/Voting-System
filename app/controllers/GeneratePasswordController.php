<?php

class GeneratePasswordController extends \BaseController {

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
		$students = Student::all();

		foreach ($students as $student) {
			$std = Student::findOrFail($student->id);

			if (empty($std->password)) {
				$std->password = substr(Hash::make($std->fname . ' ' . $std->mname . ' ' . $std->lname), 7, 6);

				$std->save();
			}
			
		}

		$students = Student::all();

		return View::make('server.passgenerate.index')->with('students', $students);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
