<?php

/**
 * List of helper functions
 */

if(!function_exists('view')) {

	/**
	 * Returns a new view instance of loads the view
	 *
	 * @param string $name
	 * @param array $args
	 *
	 * @return \Core\Support\View
	 */
	function view($name = '', $args = [])
	{
		//Create a new view instance
		$view = new Core\Support\View();
		//No view name
		if($name == '') {
			//Return view instance
			return $view;
		}
		//We have nme loads the view
		$view->make($name, $args);
	}
}

if(!function_exists('isLoggedIn')) {

	/**
	 * Checks if a visitor is logged in
	 *
	 * @return bool
	 */
	function isLoggedIn()
	{
		//Will return true if user is logged in else will return false
		return isset($_SESSION['isLoggedIn']) && $_SESSION['isLoggedIn'] == true;
	}
}

if(!function_exists('loggedin_user')) {

	/**
	 * Returns the current logged in user
	 *
	 * @return array|null
	 */
	function loggedin_user()
	{
		//User is not lgged in
		if(!isLoggedIn()) {
			//we return null
			return null;
		}
		//Check if we have user id
		if(!isset($_SESSION['user_id']) || $_SESSION['user_id'] == '' || $_SESSION['user_id'] == null) {
			//Return null
			return null;
		}
		//Create new user object
		$user = new App\Models\User;
		//Get user id
		$user_id = $_SESSION['user_id'];
		//Get the user
		$results = $user->query("SELECT * FROM users WHERE id = '".$user_id."'");
		//We got the results
		if($results != false) {
			//Return the current user row
			return $results[0];
		} else {
			//No user found
			//return null
			return null;
		}
	}
}