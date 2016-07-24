<?php
return array (
  'backend' => 
  array (
    'frontName' => '[[admin_folder]]',
  ),
  'crypt' => 
  array (
    'key' => '[[key]]',
  ),
  'session' => 
  array (
    'save' => 'db',
  ),
  'db' => 
  array (
    'table_prefix' => '[[dbprefix]]',
    'connection' => 
    array (
      'default' => 
      array (
        'host' => '[[softdbhost]]',
        'dbname' => '[[softdb]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'active' => '1',
      ),
    ),
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'default',
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'full_page' => 1,
    'translate' => 1,
    'config_webservice' => 1,
  ),
  'install' => 
  array (
    'date' => '[[_instime]]',
  ),
);
