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
	 * Logout user
	 */
	'logout' => 'AuthController@getLogout',

	/*
	 * Post register
	 */
	'register-process' => 'AuthController@postRegister',

	/*
	 * About page
	 */
	'about-us' => 'PagesController@getAbout'

];