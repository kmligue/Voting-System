<?php

class PositionController extends \BaseController {

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
		$positions = Position::with('course')->get();

		return View::make('server.position.index')->with('positions', $positions);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// show create form
		return View::make('server.position.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// save position
		return Position::savePosition();
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
		$position = Position::findOrFail($id);

		if($position->ordinality != null) return View::make('server.position.edit')->with('position', $position);
		else return Redirect::to('position')->with('msg-error', 'Position cannot be edited.');
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// update position
		return Position::updatePosition($id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		DB::beginTransaction();

		$position = Position::findOrFail($id);

		try {
			$position->delete();
		} catch (Exception $e) {
			DB::rollback();
			return Redirect::to('position')->with('msg-error', 'Error deleting position.');
		}

		try {
			$course = Course::findOrFail($position->course_id);

			$course->representative = 0;

			$course->save();
		} catch (Exception $e) {
			DB::rollback();
			return Redirect::to('position')->with('msg-error', 'Error deleting.');
		}

		DB::commit();
		return Redirect::to('position')->with('msg-success', 'Position successfully deleted!');
	}


}
