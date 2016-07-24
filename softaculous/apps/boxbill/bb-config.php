<?php 
return array (
  'debug' => false,
  'license' => 'FREE-5RTY-POI8-0UYT-IUYT-TGH6',
  'salt' => '[[salt]]',
  'url' => '[[softurl]]/',
  'admin_area_prefix' => '/bb-admin',
  'sef_urls' => false,
  'timezone' => 'UTC',
  'locale' => 'en_US',
  'locale_date_format' => '%A, %d %B %G',
  'locale_time_format' => ' %T',
  'path_data' => '[[softpath]]/bb-data',
  'path_logs' => '[[softpath]]/bb-data/log/application.log',
  'log_to_db' => true,
  'db' => 
  array (
    'type' => 'mysql',
    'host' => '[[softdbhost]]',
    'name' => '[[softdb]]',
    'user' => '[[softdbuser]]',
    'password' => '[[softdbpass]]',
  ),
  'twig' => 
  array (
    'debug' => true,
    'auto_reload' => true,
    'cache' => '[[softpath]]/bb-data/cache',
  ),
  'api' => 
  array (
    'require_referrer_header' => false,
    'allowed_ips' => 
    array (
    ),
    'rate_span' => 3600,
    'rate_limit' => 1000,
  ),
);