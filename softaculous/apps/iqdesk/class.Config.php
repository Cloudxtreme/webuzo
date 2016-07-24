<?php
ini_set("display_errors", 0); 	#ini_set("display_errors", 1);
error_reporting(0);				#error_reporting(E_ALL);

// Add slashes to all incoming GET/POST data.
$_GET = array_map("addslashes", array_map("stripslashes",$_GET));
$_POST = array_map("addslashes", array_map("stripslashes",$_POST));

class Config{
	################## Database Configuration ########################	
	public $HOST_NAME		= '[[softdbhost]]';
	public $DATABASE_NAME 	= '[[softdb]]';
	public $DB_USERNAME		= '[[softdbuser]]';
	public $DB_PASSWORD		= '[[softdbpass]]';
	
	################## Administrator Configuration ########################
	public $LOGIN_ADMIN_NAME	= '[[admin_username]]';
	public $LOGIN_ADMIN_PASSWORD = '[[admin_pass]]';
	
	################## Currency ########################################
	public $CURRENCY = 'Pound';
}
?>