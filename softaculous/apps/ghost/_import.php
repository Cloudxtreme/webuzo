<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import.php(For individual softwares)
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
// Note : The path of the script package 
//        is $software['path'].'/' . So to
//        access other files use 
//        $software['path'].'/other_file.ext'
//////////////////////////////////////////

//The Upgrade process
function __import_ghost($path){
	
	$r = array();
	
	$r['ver'] = __version_ghost($path);
	
	//r_print($r); return false;
	return $r;
	
}

function __version_ghost($path){
	
	$file = sfile($path.'/package.json');
	
	if(!empty($file)){
		preg_replace('/("|\')version("|\'):(\s*?)("|\')(.*?)("|\'),/ies', '$ver = trim(\'$5\')', $file);
	}
	
	return $ver;
}


?>