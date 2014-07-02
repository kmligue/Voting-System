<?php

class PrintController extends \BaseController {

	public function __construct() {

		// perform auth check
		$this->beforeFilter('auth');
		$this->beforeFilter('role', array('only' => array('edit', 'destroy')));

	}

	public function notVoted() {
		$students = Student::where('isVoted', '=', '0')
							->select('fname', 'mname', 'lname')
							->get();

		return View::make('server.notvoted')->with('students', $students);
	}

	public function result() {
		$president = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'President')
						->orderBy('cnt', 'desc')
						->take(1)
						->get();

		$v_president = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'Vice-President')
						->orderBy('cnt', 'desc')
						->take(1)
						->get();

		return View::make('server.result')->with('president', $president)->with('v_president', $v_president);
	}

}