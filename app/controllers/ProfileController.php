<?php

class ProfileController extends \BaseController {

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
			$user = User::all();

			return Response::json($user);
		}

		$usertypes = UserType::all();

		return View::make('server.profile.index')->with('usertypes', $usertypes);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// return error page because method is not needed
		return Response::view('errors.403', array(), 403);
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
		// return error page because method is not needed
		return Response::view('errors.403', array(), 403);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{

		if(Input::has('password'))  {
			$credentials = Input::only('password', 'password_confirmation');
			return User::updatePassword($id, $credentials);
		}
		else if(Input::hasFile('image')) {
			$credentials = Input::file('image');
			return User::updateProfileImage($id, $credentials);
		}
		else {
			$credentials = Input::only('fname', 'mname', 'lname', 'usertypeid', 'username');
			return User::updateCredentials($id, $credentials);
		}
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