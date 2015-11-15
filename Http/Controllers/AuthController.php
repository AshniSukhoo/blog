<?php

namespace App\Http\Controllers;

use App\Models\User;
use Core\Support\Hash;

/**
 * Class AuthController
 *
 * @package App\Http\Controllers
 */
class AuthController
{
	/**
	 * Create a new instance of AuthController
	 */
	public function __construct()
	{

	}

	/**
	 * Login process
	 */
	public function postLogin()
	{
		echo "login process";
	}

	/**
	 * Registration process
	 */
	public function postRegister()
	{
		//Form not valid
		$validator = true;

		//Username
		if(!isset($_POST['username']) || $_POST['username'] == '') {
			$validator = false;
		}

		//If form is valid the continue processing
		if($validator) {
			//Create new user model
			$user = new User;

			//Create new hash
			$hash = new Hash;

			//Get user data
			$data = [
				'username' => $_POST['username'],
				'password' => $hash->make($_POST['password']),
				'email' => $_POST['email'],
				'created_at' => date('Y-m-d H:i:s')
			];

			//Send data to database
			$results = $user->insert($data);

			if($results) {
				echo 'New user inserted';
			} else {
				echo 'No data inserted';
			}

		} else {
			//Form is not valid
			view('login-register');
		}
	}

}