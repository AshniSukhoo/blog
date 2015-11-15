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