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

global $__settings, $error, $software, $globals;
	
	//CHMOD some files
	@schmod($__settings['softpath'].'/app/installlib.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/install.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/autoinstall.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/noah.ini.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/update.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-2.1.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-2.1.1.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-2.1.2.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-2.2.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-2.3.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-2.4.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-2.4.1.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-3.0.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-3.0.2.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-3.1.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-3.1.1.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-3.1.3.php', $globals['ofc']);	
	@schmod($__settings['softpath'].'/updateinfo-4.0.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-4.0.1.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-4.0.2.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-4.1.0.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/updateinfo-4.1.5.php', $globals['ofc']);
	@schmod($__settings['softpath'].'/app/', $globals['odc']);
	@schmod($__settings['softpath'].'/upload/', $globals['odc']);
	@schmod($__settings['softpath'].'/upload/users/', $globals['odc']);
	@schmod($__settings['softpath'].'/pictures/users/', $globals['odc']);
	@schmod($__settings['softpath'].'/logs/', $globals['odc']);
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	if(sversion_compare($__settings['ver'], $software['ver'], '>=')){
		$error[] = 'It is not possible to Upgrade from '.$__settings['ver'].' to '.$software['ver'];
	}

	//If there are some shorfalls then pass it to $error and return false
	
	return true;

}

//===========================
// Software Vendors Functions
//===========================

//Just Validate an email
function __email_address($email){

global $error;

	if(!emailvalidation($email)){
		$error[] = '{{err_wrongemail}}';
	}		
	return $email;
}


?>