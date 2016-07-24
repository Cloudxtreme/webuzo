<?php

return array(
	'default' => 'mysql',
	'prefix' => '[[dbprefix]]',
	'connections' => array(
		'mysql' => array(
			'driver' => 'mysql',
			'hostname' => '[[softdbhost]]',
			'port' => '3306',
			'username' => '[[softdbuser]]',
			'password' => '[[softdbpass]]',
			'database' => '[[softdb]]',
			'charset' => 'utf8'
		)
	)
);
