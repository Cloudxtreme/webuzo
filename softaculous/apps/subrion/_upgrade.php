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

global $__settings, $globals, $setupcontinue, $software, $error, $notes;

	// We need to unzip the upgrade package
	if(!sunzip($software['path'].'/upgrade/upgrade.zip', $__settings['softpath'])){
		$error[] = 'Could not unzip the upgrade package.';
	}
	
	if(sversion_compare($__settings['ver'], '2.3.6', '<')){
		$setupcontinue = 'admin/manage/database/import/';
		$notes = 'Please Login as Admin and visit the above Upgrade url then click on <b>Go</b> to upgrade the database.<br />
		Remove the following file after completing the above database Upgrade process : <br /> <b>'.$__settings['softpath'].'/install/modules/module.install.php</b>';
	}
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	// Change this every time there is an update becuase the script can be updated only from successive versions i.e. 2.3.5 to 2.3.6
	$allowed_ver = '2.3.5';
	if(sversion_compare($__settings['ver'], $allowed_ver, '<')){
		$error[] = 'It is not possible to upgrade Subrion from versions less than '.$allowed_ver;
	}
	
	return true;

}

?>