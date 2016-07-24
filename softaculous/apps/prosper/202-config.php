<?php

// ** MySQL settings ** //
$dbname = '[[softdb]]';    		// The name of the database
$dbuser = '[[softdbuser]]';     		  		// Your MySQL username
$dbpass = '[[softdbpass]]'; 			// ...and password
$dbhost = '[[softdbhost]]';    					// 99% chance you won't need to change this value
$mchost = 'localhost';  					//this is the memcache server host, if you don't know what this is, don't touch it.



/*---DONT EDIT ANYTHING BELOW THIS LINE!---*/

//Database conncetion class
class DB {
	private $_connection;
	private static $_instance; //The single instance
 
	/*
	Get an instance of the Database
	@return Instance
	*/
	public static function getInstance() {
		if(!self::$_instance) { // If no instance then make one
			self::$_instance = new self();
		}
		return self::$_instance;
	}
 
	// Constructor
	
	private function __construct() {
		global $dbhost;
		global $dbuser;
		global $dbpass;
		global $dbname;
		
		$this->_connection = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	}
 
	// Magic method clone is empty to prevent duplication of connection
	private function __clone() { }
 
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
}

try {
	$database = DB::getInstance();
	$db = $database->getConnection();
} catch (Exception $e) {
	$db = false;
}