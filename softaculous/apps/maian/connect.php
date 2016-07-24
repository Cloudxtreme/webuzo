<?php

/*==============================================================================================
  DATABASE CONNECTION PARAMETERS
  ==============================

  Enter your database connection parameters. If you are not sure of this, please contact
  your web host. If you get a message along the lines of 'Access denied for user..', then
  your connection information is not correct.

  Important: The prefix is for people with only a single database. If you aren`t bothered
  about the prefix, do NOT comment it out. Leave it blank if no prefix is required.

================================================================================================*/

define('DB_HOST', '[[softdbhost]]');
define('DB_USER', '[[softdbuser]]');
define('DB_PASS', '[[softdbpass]]');
define('DB_NAME', '[[softdb]]');
define('DB_PREFIX', '[[dbprefix]]');
define('DB_CHAR_SET', 'utf8'); // Character encoding set

/*============================================================================================================
  MYSQL LOCALE
  ============

  Specify the locale for your database. Where date_format is used to convert dates, this will convert the
  date to your own locale. If you aren`t sure, leave as is.

  For more info visit:
  http://dev.mysql.com/doc/refman/5.0/en/locale-support.html (MySQL5)
  http://dev.mysql.com/doc/refman/4.1/en/locale-support.html (MySQL4)

  Examples:
  define('DB_LOCALE', 'en_GB'); = English/United Kingdom
  define('DB_LOCALE', 'en_US'); = English/United States
  define('DB_LOCALE', 'en_AU'); = English/Australia
  define('DB_LOCALE', 'fi_FI'); = Finnish/Finland

============================================================================================================*/

define('DB_LOCALE', 'en_GB');

/*==============================================================================================
  SECRET KEY OR SALT
  ==================

  Specify secret key (sometimes called a salt). This is for security and is encrypted during script execution.
  DO NOT change this value at a later date. Change ONLY before a clean install.

  This should ideally be a mix of random numbers, letters and characters. You can use sha1 and md5 for added
  security. You should not use something that changes with each page load.

  Good examples:
  define('SECRET_KEY', 'jh7sghe[]]0gjhfger');
  define('SECRET_KEY', md5('jh7sghe[]]0gjhfger'));
  define('SECRET_KEY', sha1('jh7sghe[]]0gjhfger'));

  Bad examples:
  define('SECRET_KEY', rand(1111,9999));
  define('SECRET_KEY', sha1(rand(1111,9999)));

  If you are using the helpdesk system on multiple domains, set a different key for each

================================================================================================*/

define('SECRET_KEY', '[[SECRET_KEY]]');

/*==============================================================================================
  COOKIE DATA - FOR ADMIN LOGIN
  =============================

  Name    = Set cookie name for security. This should ideally be a mix of random numbers, letters and characters.
            Leave blank to disable the 'Remember Me' option on the admin login page.
  Expiry  = Days before cookie expires
  SSL     = If set to 1, sets cookie ONLY when SSL is detected

================================================================================================*/

define('COOKIE_NAME', '[[COOKIE_NAME]]');
define('COOKIE_EXPIRY_DAYS', 30);
define('COOKIE_SSL', 0);

/*=========================================================================================================
  SHOW MYSQL ERRORS
  =================

  By default MySQL errors are shown onscreen. This can be a security issue as it reveals server paths
  and sensitive data to visitors. If you are sure the system is working fine, this value should be set
  to 0 to disable mysql errors. If set to 0, specify friendly message in MYSQL_DEFAULT_ERROR.

  Note: HTML mey be used in the default error, but apostrophes MUST be escaped with a backslash. ie: \'

===========================================================================================================*/

define('ENABLE_MYSQL_ERRORS', 1);
define('MYSQL_DEFAULT_ERROR', 'Database Error - Check Back Later (If you are the site developer, enable "ENABLE_MYSQL_ERRORS" in the "control/connect.php" file)');

?>
