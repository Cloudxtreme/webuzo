<?php

//////////////////////////////////////////////////////////////
//===========================================================
// install.php(For individual softwares)
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
// Note : The path of the install package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

// The Post Remove process
function __scripts_pre_remove(){

global $__settings, $error, $software, $globals, $softpanel, $notes;

	// Get the port
	shell_exec('killall -9 node');
	
}

// The Post Remove process
function __scripts_post_remove(){

global $__settings, $error, $software, $globals, $softpanel, $notes;

	// Remove node stuff
	srm($__settings['softdatadir']);
	
	shell_exec('rm -rf '.$__settings['softdatadir']);
	shell_exec('rm -rf '.$__settings['softpath'].'/node_modules');

}
	
?>