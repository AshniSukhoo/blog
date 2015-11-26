<?php

namespace App\Http\Controllers;

/**
 * Class PagesController
 * @package App\Http\Controllers
 */
class PagesController
{
	/**
	 * Create a new instance of PagesController
	 */
	public function __construct()
	{

	}

	/**
	 * About page
	 */
	public function getAbout()
	{
		view('about');
	}
}