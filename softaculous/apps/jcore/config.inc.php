<?php

/***************************************************************************
 *            config.inc.php
 *
 *  Jul 05, 07:00:00 2009
 *  Copyright  2009  Istvan Petres (aka P.I.Julius)
 *  me@pijulius.com
 *  For licensing, see LICENSE or http://jcore.net/license
 ****************************************************************************/
 
@define('SQL_HOST', '[[softdbhost]]');
@define('SQL_DATABASE', '[[softdb]]');
@define('SQL_USER', '[[softdbuser]]');
@define('SQL_PASS', '[[softdbpass]]');
@define('SQL_PREFIX', '[[dbprefix]]');

@define('SITE_URL', '[[softurl]]/');
@define('SITE_PATH', '[[softpath]]/');

@define('SEO_FRIENDLY_LINKS', false);

/*
 *  Do Not touch these unless you know what to do
 */
 
@define('JCORE_VERSION', '0.9');

if (!defined('ROOT_DIR')) 
	define('ROOT_DIR', '');

set_include_path(get_include_path().PATH_SEPARATOR.SITE_PATH);

if (defined('JCORE_PATH'))
	set_include_path(get_include_path().PATH_SEPARATOR.JCORE_PATH);

include_once('lib/settings.class.php');

$settings = new settings();
$settings->defineSettings();
unset($settings);

if (defined('WEBSITE_TEMPLATE') && WEBSITE_TEMPLATE) {
	if (defined('JCORE_PATH'))
		set_include_path(preg_replace('/'.preg_quote(SITE_PATH, '/').'/', 
			SITE_PATH.PATH_SEPARATOR.SITE_PATH.'template/'.
			preg_replace('/[^a-zA-Z0-9\@\.\_\- ]/', '', WEBSITE_TEMPLATE), 
			get_include_path(), 1));
	else
		set_include_path(SITE_PATH.'template/'.
			preg_replace('/[^a-zA-Z0-9\@\.\_\- ]/', '', WEBSITE_TEMPLATE) .
			PATH_SEPARATOR.get_include_path());
}

?>