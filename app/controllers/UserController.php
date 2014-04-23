<?php

class UserController extends \BaseController {

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
			$id = Input::get('id');

			$user = User::find($id);

			return Response::json($user);
		}

		$users = ViewUsers::get();
		$usertypes = Usertype::all();

		return View::make('server.user.index')->with('users', $users)->with('usertypes', $usertypes);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// create user
		$usertypes = UserType::all();

		return View::make('server.user.create')->with('usertypes', $usertypes);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// save user
		return User::saveUser();

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
		$user = User::find($id);
		$usertypes = UserType::all();

		return View::make('server.user.edit')->with('user', $user)->with('usertypes', $usertypes);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// update user
		return User::updateUser($id);
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
