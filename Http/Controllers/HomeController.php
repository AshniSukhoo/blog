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

	}

	/**
	 *
	 */
	public function getLoginRegister()
	{
		view('login-register');
	}

}