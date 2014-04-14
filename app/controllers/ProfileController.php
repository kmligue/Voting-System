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
		$credentials = Input::all();
		unset($credentials['_method']);
		unset($credentials['_token']);

		if(Input::has('password'))  {
			return User::updatePassword($id, $credentials);
		}
		else {
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