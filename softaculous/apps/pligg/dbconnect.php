<?php
define("EZSQL_DB_USER", '[[softdbuser]]');
define("EZSQL_DB_PASSWORD", '[[softdbpass]]');
define("EZSQL_DB_NAME", '[[softdb]]');
define("EZSQL_DB_HOST", '[[softdbhost]]');
if (!function_exists('gettext')) {
	function _($s) {return $s;}
}
?>