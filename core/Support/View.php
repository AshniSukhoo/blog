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
	 * @param string $viewName
	 */
	public function make($viewName)
	{
		//Loads the new view
		include $this->baseViewFolder.'/'.$viewName.'.php';
	}

}