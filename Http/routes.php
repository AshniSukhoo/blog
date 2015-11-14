<?php

/*
 * Routes list for the site
 */
$routes = [

	/*
	 * Home page route
	 */
	'/' => 'HomeController@index',

	/*
	 * Login register page
	 */
	'login-register' => 'HomeController@getLoginRegister',

	/*
	 * Post login
	 */
	'login-process' => 'AuthController@postLogin',

	/*
	 * Post register
	 */
	'register-process' => 'AuthController@postRegister',

];