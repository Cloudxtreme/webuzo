<?php
  define('HTTP_SERVER', 'http://[[domhost]]');
  define('HTTPS_SERVER', '[[protocol]]://[[domhost]]');
  define('ENABLE_SSL', [[bool_SSL]]);
  define('HTTP_COOKIE_DOMAIN', '[[domhost]]');
  define('HTTPS_COOKIE_DOMAIN', '[[domhost]]');
  define('HTTP_COOKIE_PATH', '[[relativeurl]]/');
  define('HTTPS_COOKIE_PATH', '[[relativeurl]]/');
  define('DIR_WS_HTTP_CATALOG', '[[relativeurl]]/');
  define('DIR_WS_HTTPS_CATALOG', '[[relativeurl]]/');
  define('DIR_WS_ADMIN', 'admin/');
  define('DIR_WS_IMAGES', 'images/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', '[[softpath]]/');
  define('DIR_FS_ADMIN', '[[softpath]]/admin/');
  define('DIR_FS_WORK', '[[softpath]]/includes/work/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
  define('DIR_FS_BACKUP', '[[softpath]]/admin/backups/');

  define('DB_SERVER', '[[softdbhost]]');
  define('DB_SERVER_USERNAME', '[[softdbuser]]');
  define('DB_SERVER_PASSWORD', '[[softdbpass]]');
  define('DB_DATABASE', '[[softdb]]');
  define('DB_DATABASE_CLASS', 'mysqli_innodb');
  define('DB_TABLE_PREFIX', '[[dbprefix]]');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'database');
?>