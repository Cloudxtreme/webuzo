<?php

	// mySQL connection information
	$MYSQL_HOST = '[[softdbhost]]';
	$MYSQL_USER = '[[softdbuser]]';
	$MYSQL_PASSWORD = '[[softdbpass]]';
	$MYSQL_DATABASE = '[[softdb]]';
	$MYSQL_PREFIX = '[[dbprefix]]';
	// new in 3.50. first element is db handler, the second is the db driver used by the handler
	// default is $MYSQL_HANDLER = array('mysql','mysql');
	//$MYSQL_HANDLER = array('mysql','mysql');
	//$MYSQL_HANDLER = array('pdo','mysql');
	$MYSQL_HANDLER = array('mysql','');

	// main nucleus directory
	$DIR_NUCLEUS = '[[softpath]]/nucleus/';

	// path to media dir
	$DIR_MEDIA = '[[softpath]]/media/';

	// extra skin files for imported skins
	$DIR_SKINS = '[[softpath]]/skins/';

	// these dirs are normally sub dirs of the nucleus dir, but 
	// you can redefine them if you wish
	$DIR_PLUGINS = $DIR_NUCLEUS . 'plugins/';
	$DIR_LANG = $DIR_NUCLEUS . 'language/';
	$DIR_LIBS = $DIR_NUCLEUS . 'libs/';

	// include libs
	include($DIR_LIBS.'globalfunctions.php');
	$CONF['alertOnSecurityRisk'] = 0;
?>