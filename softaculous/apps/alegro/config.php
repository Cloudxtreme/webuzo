<?php
if(!defined('VALID_ACCESS')){ header('Location: index.php');exit('Forbidden Path');}
define('CONFIG_VERSION', '1.2.9');
define('DB_HOST', '[[softdbhost]]');
define('DB_USER', '[[softdbuser]]');
define('DB_PASSWORD', '[[softdbpass]]');
define('DB_NAME', '[[softdb]]');
define('DIR_BASE', '[[softpath]]/');
define('HTTP_BASE', '[[softurl]]/');
define('HTTPS_BASE', '');
define('PATH_ADMIN', '[[admin_folder]]');
?>
