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

/////////////////////////////////////////
// All functions in this PAGE must begin
// with TWO UNDERSCORE '__' to avoid 
// clashes with SOFTACULOUS Functions
// e.g. __funcname()
/////////////////////////////////////////

//The Install process
function __install(){

global $__settings, $error, $software, $globals, $softpanel, $notes;
	
	// Set Environment PATH for exec();
	putenv('PATH=/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/root/bin');
	
	// Delete your self
	@unlink(__FILE__);
	
	echo 'Started';
	
	// Make a temporary folder
	$tmp = 'tmp'.rand(1000, 9999);
	@mkdir('[[nodedir]]/'.$tmp);
	@chmod('[[nodedir]]/'.$tmp, 0777);
	
	echo 'Created TMP Folder';
	
	// Set the env
	putenv('TMPDIR=[[nodedir]]/'.$tmp);
	putenv('TMP=[[nodedir]]/'.$tmp);
	putenv('TEMP=[[nodedir]]/'.$tmp);
	
	echo 'Installing';
	
	// Initiate the installer. Installing Node 
	__do_exec('export HOME=[[nodedir]]; cd [[softpath]]; [[nodedir]]/bin/npm install --production 2>&1', 'Error installing node modules ! This generally happens due to less memory.');
	
	// Were there any errors
	if(!empty($error)){
		return false;
	}
	
	echo 'Installed';
	
	// Start the Node service
	__do_exec('export HOME=[[nodedir]]; cd [[softpath]]; [[nodedir]]/bin/npm start --production > [[ghostlog]] 2>&1 &', 'Error starting ghost !');
	
	// Were there any errors
	if(!empty($error)){
		return false;
	}
	
	echo 'Started';
	
	// Installed successfully
	file_put_contents('soft_ghost_install_success', 1);
	
}

// Execute exec(); Set $debug to 1 to print output
function __do_exec($cmd, $errorStr, $debug = 0){	
	
	global $error;
	
	exec($cmd, $out, $ret);
	
	echo $cmd.'<br>';
	print_r(array($ret, $out));	
		
	if(!empty($ret)){
		$error[] = $errorStr;	
	}
	
	// Store the error
	if(!empty($error)){
		file_put_contents('soft_ghost_install_error', serialize($error));
	}
}
	
// Delete your self
@unlink(__FILE__);

// Start the install
__install();
	
?>