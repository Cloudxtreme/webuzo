<?php
 /* Configuration file for Hotaru CMS. */

// Paths
define("BASEURL", '[[softurl]]/');    // e.g. http://www.mysite.com/    Needs trailing slash (/)

// Database details
define("DB_USER", '[[softdbuser]]');        		// Add your own database details
define("DB_PASSWORD", '[[softdbpass]]');
define("DB_NAME", '[[softdb]]');
define("DB_HOST", '[[softdbhost]]');     			// You probably won't need to change this

// You probably don't need to change these
define("DB_PREFIX", '[[dbprefix]]');     		// Database prefix, e.g. "hotaru_"
define("DB_LANG", 'en');            			// Database language, e.g. "en"
define('DB_CHARSET', 'utf8');				// Database Character Set (UTF8 is Recommended), e.g. "utf8"
define("DB_COLLATE", 'utf8_unicode_ci');		// Database Collation (UTF8 is Recommended), e.g. "utf8_unicode_ci"

define("LANGUAGE_ADMIN", 'en');
define("LANGUAGE_MAIN", 'en');
?>