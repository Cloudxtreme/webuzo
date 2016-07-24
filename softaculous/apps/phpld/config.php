<?php
/*
# ########################################################################################################################################
# Project:     PHPLinkDirectory: Version 2.2.0
#
# **********************************************************************
# Copyright (C) 2004-2008 NetCreated, Inc. (http://www.netcreated.com/)
#
# **********************************************************************
#
# By using the software you agree to the terms:
# You may not redistribute, sell or otherwise share this software in whole or in part without the consent of the 
# the ownership of PHP Link Directory. Please contact david@david-duval.com if you need more information.
# You agree to retain a link back to http://www.phplinkdirectory.com/ on all pages of your directory.
# If you wish to remove the link from the footer of the pages, You must purchase a license to do so. The license 
# is $50.00 USD and purchase can be arranged by emailing help@phplinkdirectory.com .
# Removal of the link back without license purchase may be cause for permanent removal of permission to use this 
# script.
# In some cases, users may be required to agree to changes in the software license before receiving updates to the software.
# For questions, help, comments, discussion, etc., please join the
# PHP Link Directory Forum http://www.phplinkdirectory.com/forum/
#
# @link           http://www.phplinkdirectory.com/
# @copyright      2004-2008 NetCreated, Inc. (http://www.netcreated.com/)
# @projectManager David DuVal <david@david-duval.com>
# @package        PHPLinkDirectory
# ########################################################################################################################################
*/

error_reporting (E_ALL ^ E_WARNING ^ E_NOTICE);

@ header ('Content-Type: text/html; charset=utf-8');

/**
 * Add our installation path to the include_path
 */
define ('INSTALL_PATH', substr (__file__, 0, -18));

if(!defined ('PATH_SEPARATOR'))
   define ('PATH_SEPARATOR', strtoupper (substr (PHP_OS, 0, 3)) == 'WIN' ? ';' : ':');

ini_set ('include_path', ini_get ('include_path').PATH_SEPARATOR .INSTALL_PATH);

define('TABLE_PREFIX','[[dbprefix]]');
define('ADODB_ASSOC_CASE', 1);
require_once 'include/tables.php';
define('DEMO', false);

define('LANGUAGE', 'en');
define('DB_DRIVER', 'mysql');
define('DB_HOST', '[[softdbhost]]');
define('DB_NAME', '[[softdb]]');
define('DB_USER', '[[softdbuser]]');
define('DB_PASSWORD', '[[softdbpass]]');
?>