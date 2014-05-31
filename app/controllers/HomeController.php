<?php

class HomeController extends \BaseController {

	public function __construct() {

		// perform auth check
		$this->beforeFilter('studentGuest');

	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// check if already voted
		


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
		$votes = Input::all();
		$id = '';
		
		foreach ($votes as $key => $value) {
			if(empty($id))
			{
				$id .= $value;
			}
			else 
			{
				$id .= ', ' . $value;
			}
		}

		$id = explode(',', $id);
		$candidates = Candidate::whereIn('candidates.id', $id)
								->join('students', 'students.id', '=', 'candidates.student_id')
								->join('positions', 'positions.id', '=', 'candidates.position_id')
								->select('candidates.id', 'positions.name', 'candidates.imagepath', 'students.fname', 'students.mname', 'students.lname')
								->orderBy('positions.ordinality', 'asc')
								->get();
		
		return View::make('client.home.create')->with('candidates', $candidates);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$votes = Input::all();
		unset($votes['_token']);
		$student_id = Session::get('id');

		DB::beginTransaction();

		try {
			foreach ($votes as $key => $value) {
				DB::table('votes')->insertGetId(
					array('student_id' => $student_id, 'candidate_id' => $value)
				);
			}
		} catch (Exception $e) {
			DB::rollback();
			return Redirect::to('/home')->with('error', 'Error submitting votes!');
		}

		DB::commit();

		Session::forget('id');
		return Redirect::to('/');
		
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