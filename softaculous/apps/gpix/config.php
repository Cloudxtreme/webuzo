<?php

// application global configuration constants.
// these are set by the installation program, and should not
// be updated directly

// package name, version
define('PACKAGE_NAME', '[[site_name]]');
define('PACKAGE_VERSION', '1.4.0');

// directories
define('PACKAGE_ROOT', '[[softpath]]/');
define('INCLUDES_DIR', '[[softpath]]/includes/');
define('SMARTY_DIR', '[[softpath]]/libs/Smarty/');
define('SMARTY_TEMPLATE_DIR', '[[softpath]]/templates/');
define('SMARTY_COMPILE_DIR', '[[softpath]]/templates_c/');
define('SMARTY_CACHE_DIR', '[[softpath]]/cache/');
define('TEMP_DIR', '[[softpath]]/temp/');
define('GRIDS_DIR', '[[softpath]]/grids/');
define('PEAR_DIR', '[[softpath]]/libs/Pear/');

// database connection parameters
define('DB_HOST', '[[softdbhost]]');
define('DB_USER', '[[softdbuser]]');
define('DB_PASS', '[[softdbpass]]');
define('DB_NAME', '[[softdb]]');

// table prefix applied to each table
define('DB_PREFIX', '[[dbprefix]]');

// url root
define('DOC_ROOT', '[[relativeurl]]/');

// mail settings
define('MAIL_TYPE', 'mail');
define('SMTP_HOST', '');
define('SMTP_PORT', '25');
define('SMTP_AUTH', '');
define('SMTP_USER', '');
define('SMTP_PASS', '');
define('SM_PATH', '');

// default language (the language templates are written in)
define('DEFAULT_LANGUAGE', 'en');

// cookie names
define('SESSION_COOKIE_NAME', 'mp_session');
define('LANGUAGE_COOKIE_NAME', 'mp_language');

// various limits
define('CELL_SIZE', 10);
define('GRID_SIZE_MAX', 10000);

// lighten factor for grayscale image (0.0 <= factor < 1.0)
define('GRAYSCALE_LIGHTEN', 0.25);

// region status constants
define('REGION_FREE', 0);
define('REGION_ACTIVE', 1);
define('REGION_PENDING', 2);
define('REGION_SUSPENDED', 3);
define('REGION_RESERVED', 4);
define('REGION_EXPIRED', 5);
define('REGION_PENDING_BG', '888888');
define('REGION_PENDING_FG', 'FFFFFF');
define('REGION_PENDING_LETTER', 'P');
define('REGION_SUSPENDED_BG', '444444');
define('REGION_SUSPENDED_FG', 'FFFFFF');
define('REGION_SUSPENDED_LETTER', 'S');
define('REGION_RESERVED_BG', '000000');
define('REGION_RESERVED_FG', 'FFFFFF');
define('REGION_RESERVED_LETTER', 'R');
define('REGION_EXPIRED_BG', '666666');
define('REGION_EXPIRED_FG', 'FFFFFF');
define('REGION_EXPIRED_LETTER', 'E');

// use PHP_SELF for script name?
define('USE_PHP_SELF', 0);

// memory limit to use during grid publishing
define('PUBLISH_MEMORY_LIMIT', '32M');

// this is set when the installer completes
define('INSTALL_COMPLETED', true);

// check for installation complete
if (@INSTALL_COMPLETED !== true) {
  if (file_exists('install.php')) {
    header('Location: install.php');
    exit;
  }
  die("This application must be installed first. See the README.txt file included with the application.");
}

// set the include path
ini_set('include_path', implode(PATH_SEPARATOR, array(
  '.',
  PACKAGE_ROOT,
  INCLUDES_DIR,
  PEAR_DIR,
  SMARTY_DIR,
)));

// perform per-request initialization
require('init.inc.php');

?>
