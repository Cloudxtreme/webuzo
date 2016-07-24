<?php
/**
 * Configuration: Global
 *	- phpCOIN is based on concept and code of Mike Lansberry <mg@mgwebhosting.com>
 *	- Do NOT alter or remove this text block
 * @package phpCOIN
 * @subpackage Configuration
 * @version 1.6.5
 * @author Stephen M. Kitching <support@phpcoin.com>
 * @copyright Copyright © 2003-2009 COINSoftTechnologies Inc. All rights reserved.
 * @license coin_docs/license.txt phpCOIN License Terms
 */


# Code to handle file being loaded by URL
	IF (eregi('config.php', $_SERVER['PHP_SELF'])) {
		Header("Location: error.php?err=01");
		exit();
	}

# Dim misc globals. Do NOT touch this line
    global $_GPV, $_CCFG, $_TCFG, $_DBCFG, $_UVAR, $_LANG, $_nl, $_sp;


/**************************************************************
 * Configuration Variables That MUST be edited
**************************************************************/

# Database Configuration Array
	$_DBCFG['dbms'] 				= "mysql";				// Database System (type)
	$_DBCFG['dbhost'] 				= "[[softdbhost]]";				// Database Host
	$_DBCFG['dbuname'] 				= "[[softdbuser]]";				// User
	$_DBCFG['dbpass'] 				= "[[softdbpass]]";				// Password
	$_DBCFG['dbname'] 				= "[[softdb]]";				// Database Name
	$_DBCFG['table_prefix'] 			= "[[dbprefix]]";				// Database table prefix


# Mailserver settings
	$_SMTP['AUTHENTICATED']			= 0;						// 1 = mailserver requires authenticated session,
														// 0 = does NOT require authentication
	# The following need to be set ONLY if $_SMTP[AUTHENTICATION] = 1
	$_SMTP['HOST']					= 'mail.yourdomain.com';		// FQDN or IP Address of your mailserver
	$_SMTP['PORT']					= 25;					// Port of your mailserver
	$_SMTP['LOCALHOST']				= 'www.yourdomain.com';		// name of machine sending email, for HELO
	$_SMTP['ACC']					= 'email@yourdomain.com';	// mailserver user name
	$_SMTP['PASS']					= 'yourpassword';			// mailserver user password


# Whether to use full urls or relative paths in links
	$_CCFG['USE_FULL_URL']			= 0;

# Offline flag to initiate redirect in core load (1=offline,0=normal)
	$_CCFG['_PKG_MODE_OFFLINE'] 		= 0;

# Ignore Offline Flag if surfer is from THIS IP (allows admin to see site as normal)
# Seperate multiple IPs with commas
	$_CCFG['_PKG_MODE_ONLINE_IP']		= '';


# Define laguage file / decoding
	$_CCFG['_HC_PKG_LANG']			= 'lang_english';			// Use this lang if the next line is 0
	$_CCFG['_DB_PKG_LANG_ENABLE']		= 1;						// Use the lang in the database

	$_CCFG['ISO_CHARSET']			= 'iso-8859-1';			// Charset used for input and output. All legal charsets allowed, including UTF-8


# Theme settings
	$_CCFG['_HC_PKG_THEME']			= 'earthtone';			// Use this theme if the next line is 0
	$_CCFG['_DB_PKG_THEME_ENABLE']	= 1;					// Use the theme in the database



# Shows or hides debug info for MySQL queries and server loads at page bottom
# Leave this 0 for production use, 1 if you have MySQL query errors but do not know why
	$_CCFG['_debug_queries']			= 0;


# If you have some themes or modules written for phpCOIN v1.3.1 or lower, you
# can either re-write them according to /coin_docs/readme.txt OR you may simply
# enable "compatibility mode". We recommend re-writing so you do not lose the
# speed advantages of phpCOIN v1.4.0
	$_CCFG['ENABLE_COMPATIBILITY_MODE'] = 0;


# Google Adsense Ad Code
# Replace this with your own code, if you have a Google Adsense Account
# 120 x 600 Tower, for placing in side menu-box OR in siteinfo or FAQ or pages
# The tag %GOOGLE_V% will be replaced with the following
	$_CCFG['ADSENSE_VERTICAL']		='<script type="text/javascript"><!--
google_ad_client = "pub-4629014099185225";
/* phpCOIN Download 120x600 */
google_ad_slot = "2508894821";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';


# Google Adsense Ad Code
# Replace this with your own code, if you have a Google Adsense Account
# 120 x 600 Horizontal, for placing in siteinfo or FAQ or pages.
# The tag %GOOGLE_H% will be replaced with the following
	$_CCFG['ADSENSE_HORIZONTAL']		='<script type="text/javascript"><!--
google_ad_client = "pub-4629014099185225";
/* phpCOIN Download 728x90 */
google_ad_slot = "3359862896";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>';

	
# Google WebMaster Tools "verification" meta tag value
# If you verify your site via the meta tag, enter the value here. Use only
# the string value, NOT the entire tag.  For example, if Google says to add
# <meta name="verify-v1" content="EENdZlWC/SyqXE9pJHeejl9I0U0BoaNBp2whbNgmXgQ=" >
# then enter EENdZlWC/SyqXE9pJHeejl9I0U0BoaNBp2whbNgmXgQ= as the value
	$_CCFG['GOOGLE_WEBMASTER'] = '';


# Config loaded flag, to prevent double-loading of non-numeric-element arrays
	IF (!defined('CONFIGGED')) {

	# All fields of a client-to-site contact form and all fields of an order and
	# the content of helpdesk ticket or additional messages is checked against this
	# array. If anything matches, it is replaced with a **** string.
	# This is intended to prevent hack attempts, but could just as easily be used
	# to remove swear words :)
	# To add items to remove, just copy a line and change the value
		$_CCFG['PARSE_USER_ENTRY'][]	= '<a';
		$_CCFG['PARSE_USER_ENTRY'][]	= 'href';
		$_CCFG['PARSE_USER_ENTRY'][]	= 'http://';
		$_CCFG['PARSE_USER_ENTRY'][]	= 'https://';
		$_CCFG['PARSE_USER_ENTRY'][]	= 'ftp://';
		$_CCFG['PARSE_USER_ENTRY'][]	= 'src';
		$_CCFG['PARSE_USER_ENTRY'][]	= '<img';
		$_CCFG['PARSE_USER_ENTRY'][]	= '<script';
		$_CCFG['PARSE_USER_ENTRY'][]	= '</script>';
		$_CCFG['PARSE_USER_ENTRY'][]	= '<iframe';
		$_CCFG['PARSE_USER_ENTRY'][]	= '</iframe>';
		$_CCFG['PARSE_USER_ENTRY'][]	= 'javascript';
		$_CCFG['PARSE_USER_ENTRY'][]	= 'vbscript';

	# Config loaded flag, to prevent double-loading of non-numeric-element arrays
		define('CONFIGGED', 1);
	}
?>