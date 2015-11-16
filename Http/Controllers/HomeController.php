<?php

namespace App\Http\Controllers;

use App\Models\Post;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController
{

	/**
	 * Create a new instance of HomeController
	 */
	public function __construct()
	{

	}

	/**
	 * Index function of HomeController
	 */
	public function index()
	{
		//User is logged in
		if(isLoggedIn()) {
			echo "you are logged in";
		} else {
			//User is not logged in
			echo "You are not logged in";
		}

		$data = [
			'test' => '1',
			'test2' => '2',
		];

		view('home', $data);
	}

	/**
	 * Show login register page
	 */
	public function getLoginRegister()
	{
		//User must not be logged in to see this page
		if(!isLoggedIn()) {
			//Show login an register page
			view('login-register');
		} else {
			//user is logged in
			//Go back to home page
			header('location:/blog');
		}
	}
}