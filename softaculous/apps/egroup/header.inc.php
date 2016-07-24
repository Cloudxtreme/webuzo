<?php
/**
 * eGroupWare - configuration file
 *
 * Use eGroupWare's setup to create or edit this configuration file.
 * You do NOT need to copy and edit this file manually!
 *
 * @link http://www.egroupware.org
 * @license http://opensource.org/licenses/gpl-license.php GPL - GNU General Public License
 * @author RalfBecker@outdoor-training.de
 * (This file was originaly written by Dan Kuykendall)
 * @version $Id: header.inc.php.template 52872 2015-06-02 09:15:57Z hnategh $
 */

// allow to migrate from phpgw_info to egw_info
if (!isset($GLOBALS['egw_info']) || in_array($GLOBALS['egw_info']['flags']['currentapp'],array('jinn','mydms','tts')))
{
	if (!isset($GLOBALS['egw_info']))
	{
		$GLOBALS['egw_info'] =& $GLOBALS['phpgw_info'];
	}
	else
	{
		$GLOBALS['phpgw_info'] =& $GLOBALS['egw_info'];
	}
	$GLOBALS['egw_info']['flags']['phpgw_compatibility'] = true;
}

// eGW install dir, need to be changed if you copy the server to an other directory
define('EGW_SERVER_ROOT','[[softpath]]');

// other pathes depending on the one above
define('EGW_INCLUDE_ROOT',EGW_SERVER_ROOT);
define('EGW_API_INC',EGW_INCLUDE_ROOT.'/phpgwapi/inc');

// who is allowed to make changes to THIS config file via eGW's setup
$GLOBALS['egw_info']['server']['header_admin_user'] = '[[admin_username]]';
$GLOBALS['egw_info']['server']['header_admin_password'] = '[[config_pass]]';

// restrict the access to setup to certain (comma separated) IPs or domains
$GLOBALS['egw_info']['server']['setup_acl'] = '';

/* eGroupWare domain-specific db settings */
$GLOBALS['egw_domain']['default'] = array(
	'db_host' => '[[softdbhost]]',
	'db_port' => '3306',
	'db_name' => '[[softdb]]',
	'db_user' => '[[softdbuser]]',
	'db_pass' => '[[softdbpass]]',
	// Look at the README file
	'db_type' => 'mysqli',
	// This will limit who is allowed to make configuration modifications
	'config_user'   => '[[admin_username]]',
	'config_passwd' => '[[config_pass]]'
);


/*
** If you want to have your domains in a select box, change to True
** If not, users will have to login as user@domain
** Note: This is only for virtual domain support, default domain users (that's everyone
** form the first domain or if you have only one) can login only using just there loginid.
*/
$GLOBALS['egw_info']['server']['show_domain_selectbox'] = false;

$GLOBALS['egw_info']['server']['db_persistent'] = true;

/*
** used session handler: egw_session_files works for all build in php session handlers
** other handlers (like egw_session_memcache) can be enabled here
*/
$GLOBALS['egw_info']['server']['session_handler'] = 'egw_session_files';

/* This is used to control mcrypt's use */
$GLOBALS['egw_info']['server']['mcrypt_enabled'] = false;

/*
** This is a random string used as the initialization vector for mcrypt
** feel free to change it when setting up eGrouWare on a clean database,
** but you must not change it after that point!
** It should be around 30 bytes in length.
*/
$GLOBALS['egw_info']['server']['mcrypt_iv'] = '[[mcrypt]]';

$GLOBALS['egw_info']['flags']['page_start_time'] = microtime(true);

define('DEBUG_API',  False);
define('DEBUG_APP',  False);

include(EGW_SERVER_ROOT.'/phpgwapi/setup/setup.inc.php');
$GLOBALS['egw_info']['server']['versions']['phpgwapi'] = $setup_info['phpgwapi']['version'];
$GLOBALS['egw_info']['server']['versions']['current_header'] = $setup_info['phpgwapi']['versions']['current_header'];
unset($setup_info);
$GLOBALS['egw_info']['server']['versions']['header'] = '1.29';

if(!isset($GLOBALS['egw_info']['flags']['noapi']) || !$GLOBALS['egw_info']['flags']['noapi'])
{
	if (substr($_SERVER['SCRIPT_NAME'],-7) != 'dav.php' &&	// dont do it for webdav/groupdav, as we can not safely switch it off again
		(!isset($_GET['menuaction']) || substr($_GET['menuaction'],-10) != '_hooks.log') &&
		substr($_SERVER['SCRIPT_NAME'],-10) != '/share.php')
	{
		ob_start();	// to prevent error messages to be send before our headers
	}
	require_once(EGW_API_INC . '/functions.inc.php');
}
else
{
	require_once(EGW_API_INC . '/common_functions.inc.php');
}

/*
  Leave off the final php closing tag, some editors will add
  a \n or space after which will mess up cookies later on
*/
