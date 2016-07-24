<?php
/**
 * @title            Constants
 *
 * @author           Pierre-Henry Soria <hello@ph7cms.com>
 * @copyright        (c) 2012-2016, Pierre-Henry Soria. All Rights Reserved.
 * @license          GNU General Public License; See PH7.LICENSE.txt and PH7.COPYRIGHT.txt in the root directory.
 * @link             http://ph7cms.com
 * @package          PH7
 */

namespace PH7;
defined('PH7') or exit(header('Location: ./'));

################################### VARIABLES ###################################

#################### PATH ####################

#################### URL ####################

// Check the SSL protocol compatibility
$sHttp = (!empty($_SERVER['HTTPS']) && strtolower($_SERVER['HTTPS'] == 'on')) ? 'https://' : 'http://';
// Determine the domain name with the port
$sDomain = (($_SERVER['SERVER_PORT'] != '80') && ($_SERVER['SERVER_PORT'] != '443')) ?  $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] : $_SERVER['SERVER_NAME'];

// Get the domain that the cookie and cookie session is available (Set-Cookie: domain=your_site_name.com)
// $sDomain_cookie = (substr($_SERVER['HTTP_HOST'], 0, 4) === 'www.') ? '.' . substr($_SERVER['HTTP_HOST'], 4) : '.' . $_SERVER['HTTP_HOST'];
$sDomain_cookie = '.' . str_replace('www.', '', $sDomain);

// Determine the current file of the application
$sPhp_self = str_replace('\\', '', dirname(htmlspecialchars($_SERVER['PHP_SELF'], ENT_QUOTES))); // Remove backslashes for Windows compatibility


################################### CONSTANTS ###################################

#################### OTHER ####################

define('PH7_DS', DIRECTORY_SEPARATOR);
define('PH7_PS', PATH_SEPARATOR);
define('PH7_SH', '/'); // SlasH
define('PH7_SELF', (substr($sPhp_self, -1) !== PH7_SH) ? $sPhp_self . PH7_SH : $sPhp_self);
define('PH7_RELATIVE', PH7_SELF);

#################### PATH ####################

define('PH7_PATH_ROOT', __DIR__ . PH7_DS);
define('PH7_PATH_PROTECTED', '[[softpath]]/_protected/');
define('PH7_PATH_APP', PH7_PATH_PROTECTED . 'app/');
define('PH7_PATH_FRAMEWORK', PH7_PATH_PROTECTED . 'framework/');
define('PH7_PATH_LIBRARY', PH7_PATH_PROTECTED . 'library/');

#################### URL (PUBLIC) ####################

define('PH7_URL_PROT', $sHttp); // URL protocol
define('PH7_DOMAIN_COOKIE', $sDomain_cookie);
define('PH7_URL_ROOT', PH7_URL_PROT . $sDomain . PH7_SELF);
