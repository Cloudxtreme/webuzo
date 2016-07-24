<?php

$db_type = 'mysqli';
$db_host = '[[softdbhost]]';
$db_name = '[[softdb]]';
$db_username = '[[softdbuser]]';
$db_password = '[[softdbpass]]';
$db_prefix = '[[dbprefix]]';
$p_connect = false;

$base_url = '[[softurl]]';

$cookie_name = '[[puncookie]]';
$cookie_domain = '';
$cookie_path = '/';
$cookie_secure = 0;

define('FORUM', 1);

// Enable DEBUG mode by removing // from the following line
//define('FORUM_DEBUG', 1);

// Enable show DB Queries mode by removing // from the following line
//define('FORUM_SHOW_QUERIES', 1);

// Enable forum IDNA support by removing // from the following line
//define('FORUM_ENABLE_IDNA', 1);

// Disable forum CSRF checking by removing // from the following line
//define('FORUM_DISABLE_CSRF_CONFIRM', 1);

// Disable forum hooks (extensions) by removing // from the following line
//define('FORUM_DISABLE_HOOKS', 1);

// Disable forum output buffering by removing // from the following line
//define('FORUM_DISABLE_BUFFERING', 1);

// Disable forum async JS loader by removing // from the following line
//define('FORUM_DISABLE_ASYNC_JS_LOADER', 1);

// Disable forum extensions version check by removing // from the following line
//define('FORUM_DISABLE_EXTENSIONS_VERSION_CHECK', 1);