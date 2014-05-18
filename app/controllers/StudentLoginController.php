<?php

class StudentLoginController extends \BaseController {

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
		$students = Student::all();

		return View::make('client.login.index')->with('students', $students);
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
		$rules = array(
			'student' => 'required',
			'password' => 'required'
		);

		$credentials = array(
			'student' => Input::get('id'),
			'password' => Input::get('password')
		);

		$validator = Validator::make($credentials, $rules);

		if(!$validator->fails()) {

			$cnt = Student::where('id', '=', Input::get('id'))
							->where('password', '=', Input::get('password'))
							->count();

			if($cnt > 0) {
				// put student id to session
				Session::put('id', Input::get('id'));
				return Redirect::to('home');

			}
			else {

				return Redirect::to('/')->withInput(Input::except('password'))->with('error', 'Invalid credentials.');

			}

		}
		else {

			return Redirect::to('/')->withInput(Input::except('password'))->withErrors($validator);

		}
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
