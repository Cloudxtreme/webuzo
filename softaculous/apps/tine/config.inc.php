<?php
return array (
  'captcha' => 
  array (
    'count' => 0,
  ),
  'database' => 
  array (
    'host' => '[[softdbhost]]',
    'dbname' => '[[softdb]]',
    'username' => '[[softdbuser]]',
    'password' => '[[softdbpass]]',
    'adapter' => 'mysql',
    'tableprefix' => '[[dbprefix]]',
    'port' => '',
  ),
  'setupuser' => 
  array (
    'username' => '[[admin_username]]',
    'password' => '[[admin_setup_pass]]',
  ),
  'logger' => 
  array (
    'active' => false,
    'priority' => '',
  ),
  'caching' => 
  array (
    'active' => false,
    'lifetime' => '',
    'backend' => 'File',
    'redis' => 
    array (
      'host' => 'localhost',
      'port' => 6379,
    ),
    'memcached' => 
    array (
      'host' => 'localhost',
      'port' => 11211,
    ),
  ),
  'actionqueue' => 
  array (
    'active' => false,
    'backend' => 'Redis',
    'host' => 'localhost',
    'port' => 6379,
  ),
  'session' => 
  array (
    'lifetime' => 86400,
    'backend' => 'File',
    'path' => '',
    'host' => 'localhost',
    'port' => 6379,
  ),
  'tmpdir' => '',
  'filesdir' => '',
  'mapPanel' => '',
  'theme' => 
  array (
    'active' => false,
    'useBlueAsBase' => false,
  ),
);
