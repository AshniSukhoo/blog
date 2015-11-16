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
		//Form not valid
		$validator = true;

		//Error messages
		$data['login_error_messages'] = [];

		//Username
		if(!isset($_POST['username']) || $_POST['username'] == '') {
			//Set error message for login form username
			$data['login_error_messages']['username'] = 'Username is required!';
			//Validator is false
			$validator = false;
		}
		if(!isset($_POST['password']) || $_POST['password'] == '') {
			//Set error message for login form username
			$data['login_error_messages']['password'] = 'Password is required!';
			//Validator is false
			$validator = false;
		}
			
		//If form is valid the continue processing
		if($validator) {
			//Query to check username and password in database
			//Create new haser object
			$hasher = new Hash;
			//Get credentials
			$username = $_POST['username'];
			$password = $hasher->make($_POST['password']);

			//Create user model
			$user = new User;
			//Check username an password in database
			$results = $user->query("SELECT * FROM users WHERE username = '".$username."' AND password = '".$password."'");

			//Login is correct
			if($results !== false) {
				//Login success
				//Set the sessions data
				$_SESSION['isLoggedIn'] = true;
				$_SESSION['user_id'] = $results[0]['id'];
				//Go back to home page
				header('location:/blog');
			} else {
				//Login incorrect
				$data['alert_login'] = 'Username or password is incorrect';
				//Reload page
				view('login-register', $data);
			}
		} else {
			//Form is not valid
			view('login-register', $data);
		}
	}

	/**
	 * Registration process
	 */
	public function postRegister()
	{
		//Form not valid
		$validator = true;

		//Error messages
		$data['register_error_messages'] = [];

		//Username
		if(!isset($_POST['username']) || $_POST['username'] == '') {
			//Set error message for registration form username
			$data['register_error_messages']['username'] = 'Username is required!';
			//Validator is false
			$validator = false;
		}
		if(!isset($_POST['password']) || $_POST['password'] == '') {
			//Set error message for registration form password
			$data['register_error_messages']['password'] = 'Password is required!';
			//Validator is false
			$validator = false;
		}
		if(!isset($_POST['email']) || $_POST['email'] == '') {
			//Set error message for registration form email
			$data['register_error_messages']['email'] = 'E-mail is required!';
			//Validator is false
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
				//Set success message
				$data['alert_msg'] = 'Your account has been created';
				//Reload page
				view('login-register', $data);
			} else {
				//Set error message
				$data['alert_msg'] = 'Your Could not be created';
				//Reload page
				view('login-register', $data);
			}
		} else {
			//Form is not valid
			view('login-register', $data);
		}
	}

	/**
	 * Logs a user out
	 */
	public function getLogout()
	{
		//User must be logged in first
		if(isLoggedIn()) {
			//Destroy the session
			session_destroy();
			//Go back to Login page
			header('location:/blog/login-register');
		} else {
			//Go back to home page
			header('location:/blog');
		}
	}

}