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

global $__settings, $globals, $setupcontinue, $software;

	// Only for version less than 2.0.1
	if(sversion_compare($__settings['ver'], '2.0.1', '<')){
		// Lets update the database
		sdb_import('updates/1.x.x_to_2.0.1.sql');	
		sdb_import('updates/2.x.x_to_2.1.0.sql');	
	}elseif(sversion_compare($__settings['ver'], '2.1.0', '<')){
		// Lets update the database	
		sdb_import('updates/2.x.x_to_2.1.0.sql');	
	}
}

//Check whether the Minimum Software configuration matches
function __requirements(){

global $__settings, $error, $software;

	//If there are some shorfalls then pass it to $error and return false	
	if(sversion_compare($__settings['ver'], '1.0.0', '<')){
		$error[] = 'It is not possible to upgrade from versions less than 1.0.0';
		return false;
	}
	
	// This is in __requirements() because if the sconfigure fails we do not want the package to be unzipped
	// Only for version less than 2.0.1
	if(sversion_compare($__settings['ver'], '2.0.1', '<')){
		
		// We need the Database Prefix to upgrade
		$file = sfile($__settings['softpath'].'/config.php');
		
		if(empty($file)){
			$error[] = 'Could not read the config file to get the database prefix.';
			return false;
		}
		
		preg_replace('/\$d\[\'prefix\'\](\s*?)=(\s*?)\'(.*?)\';/ies', '$__settings[\'dbprefix\'] = trim(\'$3\')', $file);
		
		preg_replace('/\$d\[\'host\'\](\s*?)=(\s*?)\'(.*?)\';/ies', '$__settings[\'softdbhost\'] = trim(\'$3\')', $file);
			
		preg_replace('/\$d\[\'name\'\](\s*?)=(\s*?)\'(.*?)\';/ies', '$__settings[\'softdb\'] = trim(\'$3\')', $file);
		
		preg_replace('/\$d\[\'user\'\](\s*?)=(\s*?)\'(.*?)\';/ies', '$__settings[\'softdbuser\'] = trim(\'$3\')', $file);
		
		preg_replace('/\$d\[\'password\'\](\s*?)=(\s*?)\'(.*?)\';/ies', '$__settings[\'softdbpass\'] = trim(\'$3\')', $file);
		
		preg_replace('/\$d\[\'salt\'\](\s*?)=(\s*?)\'(.*?)\';/ies', '$__settings[\'salt\'] = trim(\'$3\')', $file);
	
		//Configure the files the software wants to
		sconfigure('config.php');
		
	}	
	
	// Only for version less than 2.1.0 and greater than 2.0.0
	if(sversion_compare($__settings['ver'], '2.1.0', '<') && sversion_compare($__settings['ver'], '2.0.0', '>')){
		
		// We need the Database Prefix to upgrade
		$file = sfile($__settings['softpath'].'/config.php');
		
		if(empty($file)){
			$error[] = 'Could not read the config file to get the database prefix.';
			return false;
		}
		
		preg_replace('/("|\')prefix("|\')(\s*?)=>(\s*?)("|\')(.*?)("|\'),/ies', '$__settings[\'dbprefix\'] = trim(\'$6\')', $file);
		
		preg_replace('/("|\')salt("|\')(\s*?)=>(\s*?)("|\')(.*?)("|\')/ies', '$__settings[\'salt\'] = trim(\'$6\')', $file);
	
		//Configure the files the software wants to
		sconfigure('config.php');
		
	}
	
	return true;

}

?>