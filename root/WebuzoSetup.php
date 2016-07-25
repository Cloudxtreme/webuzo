<?php

if(!defined('WEBUZO')){	
	define('WEBUZO', 1);
}

include_once('/usr/local/webuzo/sdk/webuzo_sdk.php');
$myip = file_get_contents('./ip.php', FILE_USE_INCLUDE_PATH);
// Configure Webuzo
$config['ip'] = $argv[1];
$config['user'] = $argv[2];
$config['email]'] = 'none@none.com';
$config['pass'] = $argv[3];
$config['host'] = $argv[4];
$config['ns1'] = ''; // OPTIONAL
$config['ns2'] = ''; // OPTIONAL
$config['license'] = ''; // OPTIONAL - Installs Free License if empty
// ---------------------------------------------------------------------------------

// Begin Process 
$new = new Webuzo_API($config['user'], $config['pass'], $config['host']);

// Configure Webuzo
$res = $new->webuzo_configure($config['ip'],  $config['user'], $config['email]'], $config['pass'], $config['host'], $config['ns1'],
$config['ns2'], $config['license']);
$res = unserialize($res);
$new->r_print($res);

?>