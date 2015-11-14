<?php

namespace App\Http\Controllers;

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
		echo 'Register';
	}

}