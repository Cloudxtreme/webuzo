<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => '[[softdbhost]]',
	'username' => '[[softdbuser]]',
	'password' => '[[softdbpass]]',
	'database' => '[[softdb]]',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
