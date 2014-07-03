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

		$pres_top = DB::table('positions')
						->select('top')
						->where('name', '=', 'President')
						->get();

		$vpres_top = DB::table('positions')
						->select('top')
						->where('name', '=', 'Vice-President')
						->get();

		$senator_top = DB::table('positions')
						->select('top')
						->where('name', '=', 'Senator')
						->get();

		$bsit_top = DB::table('positions')
						->select('top')
						->where('name', '=', 'BSIT - Governor')
						->get();

		$hrm_top = DB::table('positions')
						->select('top')
						->where('name', '=', 'BSHRM - Governor')
						->get();

		$hrs_top = DB::table('positions')
						->select('top')
						->where('name', '=', 'HRS - Governor')
						->get();

		$asct_top = DB::table('positions')
						->select('top')
						->where('name', '=', 'ASCT - Governor')
						->get();


		$president = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'President')
						->orderBy('cnt', 'desc')
						->take($pres_top)
						->get();

		$v_president = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'Vice-President')
						->orderBy('cnt', 'desc')
						->take($vpres_top)
						->get();

		$senator = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'Senator')
						->orderBy('cnt', 'desc')
						->take($senator_top)
						->get();

		$bsit_gov = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'BSIT - Governor')
						->orderBy('cnt', 'desc')
						->take($bsit_top)
						->get();

		$hrm_gov = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'BSHRM - Governor')
						->orderBy('cnt', 'desc')
						->take($hrm_top)
						->get();

		$hrs_gov = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'HRS - Governor')
						->orderBy('cnt', 'desc')
						->take($hrs_top)
						->get();

		$asct_gov = DB::table('v_tally')
						->select('candidate_name')
						->where('position_name', '=', 'ASCT - Governor')
						->orderBy('cnt', 'desc')
						->take($asct_top)
						->get();

		return View::make('server.result')->with('president', $president)->with('v_president', $v_president)->with('senator', $senator)->with('bsit_gov', $bsit_gov)->with('hrm_gov', $hrm_gov)->with('hrs_gov', $hrs_gov)->with('asct_gov', $asct_gov);
	}

}