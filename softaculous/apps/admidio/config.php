<?php
/**
 ***********************************************************************************************
 * Configuration file of Admidio
 *
 * @copyright 2004-2016 The Admidio Team
 * @see http://www.admidio.org/
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License v2.0 only
 ***********************************************************************************************
 */

// Select your database system for example 'mysql' or 'postgresql'
$gDbType = 'mysql';

// Table prefix for Admidio-Tables in database
// Example: 'adm'
$g_tbl_praefix = '[[dbprefix]]';

// Access to the database of the MySQL-Server
$g_adm_srv = '[[softdbhost]]';      // Server
$g_adm_usr = '[[softdbuser]]';        // User
$g_adm_pw  = '[[softdbpass]]';    // Password
$g_adm_db  = '[[softdb]]';    // Database

// URL to this Admidio installation
// Example: 'http://www.admidio.org/example'
$g_root_path = '[[softurl]]';

// Short description of the organization that is running Admidio
// This short description must correspond to your input in the installation wizard !!!
// Example: 'ADMIDIO'
// Maximum of 10 characters !!!
$g_organization = '[[short_site_name]]';

// The name of the timezone in which your organization is located.
// This must be one of the strings that are defined here https://secure.php.net/manual/en/timezones.php
// Example: 'Europe/Berlin'
$gTimezone = 'America/New_York';

// If this flag is set = 1 then you must enter your loginname and password
// for an update of the Admidio database to a new version of Admidio.
// For a more comfortable and easy update you can set this preference = 0.
$gLoginForUpdate = 1;
