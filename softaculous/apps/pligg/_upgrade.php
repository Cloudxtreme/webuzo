<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade.php(For individual softwares)
//===========================================================
// SOFTACULOUS 
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//////////////////////////////////////////
// Note : The path of the upgrade package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

// NOTE: $__settings will contain the installation information like PATH, URL. They are :
//       $__settings['ver'] - The version of the current installation
//		 $__settings['itime'] - When the software was installed
//		 $__settings['softpath'] - The current PATH
//		 $__settings['softurl'] - The URL of the software
//		 IF database was made by Softaclous
//		 $__settings['softdb'] - The Database name
//		 $__settings['softdbuser'] - Database User
//		 $__settings['softdbhost'] - Database Host
//		 $__settings['softdbpass'] - Database Password

//The Upgrade process
function __upgrade($version_from){

global $__settings, $error, $software, $globals, $setupcontinue;

	$dbver = '2.0.2';
	
	@schmod($__settings['softpath'].'/settings.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/templates/', $globals['odc'], 1);
	
	$post = array();
	$post['submit'] = 'Proceed with Upgrade';
	$get1 = curl_call($__settings['softurl'].'/install/upgrade.php?step=1&language=english', 0, 5, $post);
	
	// Get the database prefix
	$file = sfile($__settings['softpath'].'/settings.php');
	preg_match('/'.preg_quote('define(\'table_prefix\'', '/').'(.*?),(.*?)\'(.*?)\'\)/is', $file, $matches);
	$__settings['dbprefix'] = $matches[3];
	
	$result = sdb_query("SELECT data FROM ".$__settings['dbprefix']."misc_data WHERE name='pligg_version';", $__settings['softdbhost'], $__settings['softdbuser'], $__settings['softdbpass'], $__settings['softdb']);
	
	if(!empty($_GET['debug'])){
		echo $get1.'<br />';
		echo 'pligg_version='.$result[0]['data'];
	}
	
	if(version_compare($result[0]['data'], $dbver, '=')){
		$setupcontinue = '';
		@schmod($__settings['softpath'].'/settings.php', $globals['ocfc']);
		srm($__settings['softpath'].'/install');
	}elseif(sis_autoupgrading()){
		$error[] = '{{err_auto_upgrade}}';		
	}
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	//If there are some shorfalls then pass it to $error and return false
	
	return true;

}

?>