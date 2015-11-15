<?php

namespace Core\Support;

use Exception;

/**
 * Class Hash
 * @package Core\Support
 */
class Hash
{

	/**
	 * Hash key
	 *
	 * @var string
	 */
	private $key = 'v7uQT1tRGK46X5yJ2u6OfN1mn17OMvMe';

	/**
	 * Perform hashing
	 *
	 * @param string $plain
	 * @return string|bool
	 */
	public function make($plain = '')
	{
		try {
			//No plain provided
			if($plain == '') {
				//return false
				return false;
			}
			///Has and return
			return sha1($plain.sha1($this->key));
		} catch (Exception $e) {
			//Unexpected error
			return false;
		}
	}

}