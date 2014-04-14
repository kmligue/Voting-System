<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	protected $fillable = array('fname', 'mname', 'lname', 'usertypeid', 'username', 'password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public static function updateCredentials($id, $credentials) {
	
		$user = User::findOrFail($id);

		$rules = array(
			'fname' => 'required',
			'lname' => 'required',
			'usertypeid' => 'required',
			'username' => 'required|min:6'
		);

		$validator = Validator::make($credentials, $rules);
		
		if($validator->fails()) {
			return Redirect::to('profile')->withErrors($validator)->withInput();
		}

		foreach ($credentials as $key => $value) {
			$user->$key = $value;
		}

		$user->save();

		if($user) return Redirect::to('profile')->with('msg-profile', 'User profile successfully updated!');
		else return Redirect::to('profile')->with('msg-profile', 'Error saving user profile');
	}

	public static function updatePassword($id, $credentials) {

		$user = User::findOrFail($id);

		$rules = array(
			'password' => 'required|min:6',
			'retype' => 'required|min:6'
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('profile')->withErrors($validator)->withInput(Input::except('retype'));

		foreach ($credentials as $key => $value) {
			if($key == 'password') $user->$key = Hash::make($value);
		}

		$user->save();

		if($user) return Redirect::to('profile')->with('msg-cpass', 'Password successfully updated!');
		else return Redirect::to('profile')->with('msg-cpass', 'Error saving password.');
	}

}