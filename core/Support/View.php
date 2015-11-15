<?php

namespace Core\Support;

/**
 * Class View
 *
 * @package Core\Support
 */
class View
{
	/**
	 * Base view folder
	 *
	 * @var string
	 */
	private $baseViewFolder = 'views';

	/**
	 * Create a new view instance
	 */
	public function __construct()
	{

	}

	/**
	 * Loads a new view
	 *
	 * @param $viewName
	 * @param array $args
	 */
	public function make($viewName, $args = [])
	{
		//We have arguments
		if(!empty($args)) {
			//Extract variables
			extract($args, EXTR_OVERWRITE);
		}

		//Loads the new view
		include $this->baseViewFolder.'/'.$viewName.'.php';
	}

}