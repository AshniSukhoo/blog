<?php

namespace Core\Support;

use Exception;

/**
 * Class Model
 *
 * @package Core\Support
 */
class Model
{
	/**
	 * @var array
	 */
	protected $db = [];

	/**
	 * Database connection
	 *
	 * @var string
	 */
	protected $connection = '';

	/**
	 * Create a new instance of the model
	 */
	public function __construct()
	{
		//Database connection settings
		include 'config/database.php';
		//Set to class variable db
		$this->db = $db;
		//Connect to db
		$this->connectToDB();
	}

	/**
	 * Perform the database connection
	 *
	 * @return void
	 */
	private function connectToDB()
	{
		//Check for db credentials
		if($this->db['hostname'] != '' && $this->db['username'] != '' && $this->db['database'] != '') {
			//Perform the db connection
			$this->connection = @mysql_connect($this->db['hostname'], $this->db['username'], $this->db['password']);
			//Could not connect to db
			if(!$this->connection || $this->connection == '') {
				//Cannot continue
				die('Cannot connect to database with the current settings');
			}
			//Select the database name
			mysql_select_db($this->db['database'], $this->connection);
		}
	}

	/**
	 * Perform a specified query
	 *
	 * @param string $sql
	 * @return \stdClass|bool
	 */
	public function query($sql = '')
	{
		try {
			//No query
			if($sql == '') {
				//Return false
				throw new Exception('No query provided', 422);
			}
			//Execute the query
			$results = mysql_query($sql);
			//No results
			if(!$results) {
				//Return false
				return false;
			}
			//Query executed correctly
			if($results == true) {
				//return true
				return true;
			}

			//Rows to keep data
			$rows = [];
			//Loop to get all rows
			while ($row = mysql_fetch_assoc($results)) {
				//Push results in array
				array_push($rows, $row);
			}
			//Free results
			mysql_free_result($results);
			//Return array
			return $rows;
		} catch (Exception $e) {
			//Unexpected error
			return false;
		}
	}

	/**
	 * Insert into database
	 *
	 * @param array $data
	 * @return bool
	 */
	public function insert($data = [])
	{
		try {
			//No data
			if(empty($data)) {
				//Return false
				return false;
			}

			//Building the query
			$sql = 'INSERT INTO '.$this->table.' (';

			//Build keys parts
			foreach(array_keys($data) as $field) {
				//Add to $sql query
				$sql .= $field.', ';
			}
			//Remove last comma
			$sql = substr($sql, 0, -2);
			//Close parentheses
			$sql .= ')';

			//Adding values
			$sql .= ' VALUES (';

			//Loop and add values
			foreach(array_values($data) as $value) {
				//Add to query
				$sql .= '\''.$value.'\', ';
			}

			//Remove last comma
			$sql = substr($sql, 0, -2);
			//Close parentheses
			$sql .= ')';

			//Execute query
			return $this->query($sql);
		} catch (Exception $e) {
			//Unexpected error
			return false;
		}
	}

}