<?php

class DashboardController extends \BaseController {

	public function __construct() {

		// perform auth check
		$this->beforeFilter('auth');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		if(Request::ajax()) {
			$tallies = DB::table('v_tally')
						->get();

			return Response::json($tallies);
		}
		else {
			$positions = Position::orderBy('ordinality', 'ASC')
								->get();

			$candidates = Candidate::join('students', 'candidates.student_id', '=', 'students.id')
									->select('students.fname', 'students.mname', 'students.lname', 'candidates.id', 'candidates.position_id')
									->get();

			return View::make('server.dashboard.index')->with('positions', $positions)->with('candidates', $candidates);
		}

		
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