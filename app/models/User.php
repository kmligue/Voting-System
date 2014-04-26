<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	// Author::find(1)->posts()->insert(array(
	// 	'title' => 'Title1',
	// 	'body' => 'Body1'
	// ));	

	// Author::find(1)->posts()->get();

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	// protected $fillable = array('fname', 'mname', 'lname', 'usertypeid', 'username', 'password');

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

	public function usertype() {
		return $this->belongsTo('UserType');
	}

	public static function updateProfileCredentials($id) {
	
		$user = static::findOrFail($id);

		$rules = array(
			'name' => 'required|alpha_spaces|unique:users,fname,'.$id.',id,mname,'.Input::get('mname').',lname,'.Input::get('lname'),
			'middle name' => 'alpha_spaces',
			'last name' => 'required|alpha_spaces',
			'user type' => 'required',
			'username' => 'required|min:6|unique:users,username,'.$id
		);

		$credentials = array(
			'name' => Input::get('fname'),
			'middle name' => Input::get('mname'),
			'last name' => Input::get('lname'),
			'user type' => Input::get('usertypeid'),
			'username' => Input::get('username')
		);

		$validator = Validator::make($credentials, $rules);
		
		if($validator->fails()) return Redirect::to('profile')->withErrors($validator)->withInput();

		$user->fname = Input::get('fname');
		$user->mname = Input::get('mname');
		$user->lname = Input::get('lname');
		$user->username = Input::get('username');

		$user = UserType::find(Input::get('usertypeid'))->user()->save($user);

		if($user) return Redirect::to('profile')->with('msg-profile-updated', 'User profile successfully updated!');
		else return Redirect::to('profile')->with('msg-profile-error', 'Error saving user profile');
	}

	public static function updatePassword($id) {

		$user = static::findOrFail($id);

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
		$user = static::findOrFail($id);

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

	public static function saveUser() {

		$rules = array(
			'image' => 'required|image',
			'name' => 'required|alpha_spaces|unique:users,fname,null,id,mname,'.Input::get('mname').',lname,'.Input::get('lname'),
			'middle name' => 'alpha_spaces',
			'last name' => 'required|alpha_spaces',
			'user type' => 'required',
			'username' => 'required|min:6|unique:users,username',
			'password' => 'required|min:6|confirmed',
			'password_confirmation' => 'required|min:6|same:password'
		);

		$credentials = array(
			'image' => Input::file('image'),
			'name' => Input::get('fname'),
			'middle name' => Input::get('mname'),
			'last name' => Input::get('lname'),
			'user type' => Input::get('usertypeid'),
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('user/create')->withErrors($validator)->withInput(Input::except('password_confirmation'));
		
		$destination = public_path() . '/assets/images/';

		$uploaded = Input::file('image')->move($destination, Input::file('image')->getClientOriginalName());

		if($uploaded) {
			$user = new User();

			$user->fname = Input::get('fname');
			$user->mname = Input::get('mname');
			$user->lname = Input::get('lname');
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->image = '/assets/images/' . Input::file('image')->getClientOriginalName();

			$user = UserType::find(Input::get('usertypeid'))->user()->save($user);

			if($user) return Redirect::to('user')->with('msg-success', 'User successfully saved!');
			else return Redirect::to('user/create')->with('msg-error', 'Error saving data!');
		}
		else {
			return Redirect::to('user/create')->with('msg-error', 'Error uploading image!');
		}
	}

	public static function updateUser($id) {

		$rules = array(
			'image' => 'image',
			'name' => 'required|alpha_spaces|unique:users,fname,'.$id.',id,mname,'.Input::get('mname').',lname,'.Input::get('lname'),
			'middle name' => 'alpha_spaces',
			'last name' => 'required|alpha_spaces',
			'user type' => 'required',
			'username' => 'required|min:6|unique:users,username,'. $id,
			'password' => 'min:6|confirmed',
			'password_confirmation' => 'min:6|same:password'
		);

		$credentials = array(
			'image' => Input::file('image'),
			'name' => Input::get('fname'),
			'middle name' => Input::get('mname'),
			'last name' => Input::get('lname'),
			'user type' => Input::get('usertypeid'),
			'username' => Input::get('username'),
			'password' => Input::get('password'),
			'password_confirmation' => Input::get('password_confirmation')
		);

		$validator = Validator::make($credentials, $rules);

		if($validator->fails()) return Redirect::to('user/'. $id .'/edit')->withErrors($validator)->withInput(Input::except('password_confirmation'));

		// get user
		$user = static::findOrFail($id);

		// determine if new image needs to be uploaded
		if(Input::hasFile('image')) {
			$destination = public_path() . '/assets/images/';

			$uploaded = Input::file('image')->move($destination, Input::file('image')->getClientOriginalName());

			// no error uploading image
			if($uploaded) {
				$user->image = '/assets/images/' . Input::file('image')->getClientOriginalName();
			} 
			// error uploading image
			else {
				return Redirect::to('user/'. $id .'/create')->with('msg-error', 'Error uploading image!');
			}
		}

		// all validation is successfull
		$user->fname = Input::get('fname');
		$user->mname = Input::get('mname');
		$user->lname = Input::get('lname');
		$user->username = Input::get('username');

		// determine if password should be change
		if(Input::has('password')) {
			$user->password = Hash::make(Input::get('password'));
		}

		$user = UserType::find(Input::get('usertypeid'))->user()->save($user);

		if($user) return Redirect::to('user')->with('msg-success', 'User successfully updated!');
		else return Redirect::to('user/'. $id .'/create')->with('msg-error', 'Error saving data!');

	}

}