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

global $__settings, $globals, $error;
	
	@sconfigure('web.xml', 'WEB-INF/web.xml');
	if(function_exists('shell_exec')){
		shell_exec('/etc/init.d/tomcat restart');
	}else{
		$error[] = 'Please enable shell_exec';
	}
	
	
}

function __pre_unzip(){
	
global $__settings;

	@srm($__settings['softpath'].'/WEB-INF/lib/remoting-2.17.jar');
	@srm($__settings['softpath'].'/WEB-INF/lib/jenkins-core-1.489.jar');
	@srm($__settings['softpath'].'/WEB-INF/lib/instance-identity-1.2.jar');
	@srm($__settings['softpath'].'/WEB-INF/lib/cli-1.489.jar');
	@srm($__settings['softpath'].'/WEB-INF/lib/bcprov-jdk15-140.jar');
	
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	//If there are some shorfalls then pass it to $error and return false
	return true;

}


//===========================
// Software Vendors Functions
//===========================

//Just Validate an email
function __email_address($email){

global $error;

	if(!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([.])+([a-zA-Z0-9\._-]+)+$/", $email)){
		$error[] = '{{err_wrongemail}}';
	}		
	return $email;
}


?>