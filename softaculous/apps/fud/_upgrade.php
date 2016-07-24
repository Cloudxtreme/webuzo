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

global $__settings, $globals, $setupcontinue, $software, $error;
	
	$include = array();
	$exclude = array();
	$exclude[] = 'scripts/GLOBALS.php';
	$exclude[] = 'include/GLOBALS.php';
	
	$package = $software['path'].'/data.zip';
	
	//Ok lets UNZIP the SOFTWARE Package
	if(!sunzip($package, $__settings['softdatadir'], 1, $include, $exclude)){
		$error[] = 'There was some error in unzipping the FUDforum data directory';
		return false;
	}
	
	schmod($__settings['softpath'].'/GLOBALS.php', $globals['odc']);
	schmod($__settings['softpath'].'/theme/', $globals['odc'], 1);
	schmod($__settings['softpath'].'/feed.php', $globals['ofc']);
	schmod($__settings['softpath'].'/pdf.php', $globals['ofc']);
	schmod($__settings['softpath'].'/index.php', $globals['ofc']);
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software, $globals;	

	//If there are some shorfalls then pass it to $error and return false
	
	if($globals['softpanel'] == 'ampps'){
		$error[] = 'FudForum can not be Upgraded using AMPPS.';
	}
	
	//If there are some shorfalls then pass it to $error and return false
	
	return true;

}

?>