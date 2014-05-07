<?php

class CandidateController extends \BaseController {

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
		$students = Candidate::with('student')->with('position')->get();

		return View::make('server.candidate.index')->with('students', $students);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// show add form
		$students = Student::all();
		$positions = Position::all();

		return View::make('server.candidate.create')->with('students', $students)->with('positions', $positions);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		return Candidate::saveCandidate();
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
		$candidate = Candidate::findOrFail($id);
		$positions = Position::all();
		$students = Student::all();

		return View::make('server.candidate.edit')->with('candidate', $candidate)->with('positions', $positions)->with('students', $students);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return Candidate::updateCandidate($id);
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
			$candidate = Candidate::findOrFail($id);

			$candidate->delete();
		} catch (Exception $e) {
			return Redirect::to('candidate')->with('msg-error', 'Error deleting candidate.');
		}

		return Redirect::to('candidate')->with('msg-success', 'Candidate successfully deleted!');
	}


}
