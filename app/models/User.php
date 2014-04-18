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

	public static function updateCredentials($id) {
	
		$user = User::findOrFail($id);

		$rules = array(
			'first name' => 'required',
			'last name' => 'required',
			'user type' => 'required',
			'username' => 'required|min:6|unique:users,username'
		);

		$credentials = array(
			'first name' => Input::get('fname'),
			'last name' => Input::get('lname'),
			'user type' => Input::get('usertypeid'),
			'username' => Input::get('username')
		);

		$validator = Validator::make($credentials, $rules);
		
		if($validator->fails()) {
			return Redirect::to('profile')->withErrors($validator)->withInput();
		}

		$user->fname = Input::get('fname');
		$user->mname = Input::get('mname');
		$user->lname = Input::get('lname');
		$user->usertypeid = Input::get('usertypeid');
		$user->username = Input::get('username');

		$user->save();

		if($user) return Redirect::to('profile')->with('msg-profile-updated', 'User profile successfully updated!');
		else return Redirect::to('profile')->with('msg-profile-error', 'Error saving user profile');
	}

	public static function updatePassword($id) {

		$user = User::findOrFail($id);

		$rules = array(
			'password' => 'required|min:6|confirmed',
			'password_confirmation' => 'required|min:6|same:password'
		);

		$credentials = array(
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('profile')->withErrors($validator)->withInput(Input::except('password_confirmation'));

		$user->password = Hash::make(Input::get('password'));

		$user->save();

		if($user) return Redirect::to('profile')->with('msg-cpass-updated', 'Password successfully updated!');
		else return Redirect::to('profile')->with('msg-cpass-error', 'Error saving password.');
	}

	public static function updateProfileImage($id) {
		$user = User::findOrFail($id);

		$rules = array(
			'image' => 'required|image'
		);

		$credentials = array(
			'image' => Input::file('image')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('profile')->withErrors($validator)->withInput(Input::only('image'));

		$destination = public_path() . '/assets/images/';

		$uploaded = Input::file('image')->move($destination, Input::file('image')->getClientOriginalName());
		
		if($uploaded) {
			$user->image = '/assets/images/' . Input::file('image')->getClientOriginalName();

			$user->save();

			return Redirect::to('profile')->with('upload-updated', 'Successfully updated.');
		}
		else {
			return Redirect::to('profile')->with('upload-error', 'Error uploading file.');
		}
	}

}