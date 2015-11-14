<?php

namespace Core\Requests;

/**
 * Class Routing
 *
 * @package Core\Requests
 */
class Routing
{
	/**
	 * The url that was requested\
	 *
	 * @var string
	 */
	protected $requestUrl;

	/**
	 * The Routes list
	 *
	 * @var array
	 */
	protected $routesList = [];

	/**
	 * Create a new Instance of the routing class
	 */
	public function __construct($requestUrl, $routesList)
	{
		//Assign the request url in the class
		$this->requestUrl = $requestUrl;
		//Assign routes list in the class
		$this->routesList = $routesList;
	}

	/**
	 * Dispatch the current request to
	 * the appropriate Controller and function
	 */
	public function dispatch()
	{
		//Filter the route
		$this->filterRoute();
		//Find the route which matches
		if(array_key_exists($this->requestUrl, $this->routesList)) {
			//Get the controller name and function name of the route
			$route = $this->routesList[$this->requestUrl];
			//Break route into pieces
			$routePieces = explode('@', $route);
			//Get controller
			$controller = 'App\Http\Controllers\\'.$routePieces[0];
			//Get function name
			$function = $routePieces[1];
			//Call controller and function
			call_user_func_array([$controller, $function], []);
		} else {
			//Page not found
			echo "Page not found";
		}
	}

	/**
	 * Filter the route to remove extra characters
	 */
	private function filterRoute()
	{
		//Remove overflowing slash
		$this->requestUrl = rtrim($this->requestUrl, '/');
		//Url is home page
		if($this->requestUrl == '/blog') {
			//Set request url to home
			$this->requestUrl = '/';
		} else {
			//Remove blog from route
			$this->requestUrl = str_replace('/blog/', '', $this->requestUrl);
		}
	}

}