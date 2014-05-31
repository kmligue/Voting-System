<?php

class HomeController extends \BaseController {

	public function __construct() {

		// perform auth check
		$this->beforeFilter('studentAuth');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$positions = Position::orderBy('ordinality', 'ASC')
							->get();
		$student = Student::findOrFail(Session::get('id'));
		$candidates = Candidate::join('students', 'students.id', '=', 'candidates.student_id')
								->select('students.fname', 'students.mname', 'students.lname', 'candidates.position_id', 'candidates.imagepath', 'candidates.id')
								->get();

		return View::make('client.home.index')->with('positions', $positions)->with('student', $student)->with('candidates', $candidates);
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