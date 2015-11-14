<?php

namespace App\Http\Controllers;

/**
 * Class HomeController
 *
 * @package App\Http\Controllers
 */
class HomeController
{

	/**
	 * Index function of HomeController
	 */
	public function index()
	{
		view('home');
	}

	/**
	 *
	 */
	public function getLoginRegister()
	{
		view('login-register');
	}

}