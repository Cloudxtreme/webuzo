<?php
/**
 *
 * @package    mahara
 * @subpackage core
 * @author     Catalyst IT Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL version 3 or later
 * @copyright  For copyright information on Mahara, please see the README file distributed with this software.
 *
 */

/**
 * MAHARA CONFIGURATION FILE
 *
 * INSTRUCTIONS:
 * 1. Copy this file from config-dist.php to config.php
 * 2. Change the values in it to suit your environment.
 *
 * Information about this file is available on the Mahara wiki:
 *     https://wiki.mahara.org/wiki/System_Administrator's_Guide/Installing_Mahara#Create_Mahara.27s_config.php
 *
 * This file includes only the most commonly used Mahara configuration directives. For more options
 * that can be placed in this file, see the Mahara lib file:
 *
 *     htdocs/lib/config-defaults.php
 */

$cfg = new stdClass();


/**
 * database connection details
 * valid values for dbtype are 'postgres' and 'mysql'
 */
$cfg->dbtype   = 'mysql';
$cfg->dbhost   = '[[softdbhost]]';
$cfg->dbport   = null; // Change if you are using a non-standard port number for your database
$cfg->dbname   = '[[softdb]]';
$cfg->dbuser   = '[[softdbuser]]';
$cfg->dbpass   = '[[softdbpass]]';

/**
 * dataroot: The server directory where uploaded files are stored
 *
 * This is an ABSOLUTE FILESYSTEM PATH. This is NOT a URL.
 * For example, valid paths are:
 *  * /home/user/maharadata
 *  * /var/lib/mahara
 *  * c:\maharadata
 * INVALID paths:
 *  * http://yoursite/files
 *  * ~/files
 *  * ../data
 *
 * This path must be writable by the webserver and outside the document root (the
 * place where the Mahara files like index.php have been installed).
 * For security purposes, Mahara will NOT RUN if this is inside your document root.
 */
$cfg->dataroot = '[[softdatadir]]';

/**
 * wwwroot: The base URL of your Mahara installation.
 *
 * (Normally, this is automatically detected. If it doesn't work for you then try specifying it here.)
 */
// Example:
// $cfg->wwwroot = '[[softurl]]/';

/**
 * passwordsaltmain: A secret token used for one-way encryption of user account passwords.
 */
$cfg->passwordsaltmain = '[[passwordsaltmain]]';

/**
 * Uncomment the following line if this server is not a production system.
 * This will display a banner at the top of the site indicating that it is not a
 * production site, which can help prevent users confusing it with your production site.
 * It will also enable on-screen display of warnings and error messages to aid in testing.
 */
//$cfg->productionmode = false;

// closing php tag intentionally omitted to prevent whitespace issues
