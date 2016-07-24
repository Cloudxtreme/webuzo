<?php
/**************************************************************************
 *                                                                        *
 *    4images - A Web Based Image Gallery Management System               *
 *    ----------------------------------------------------------------    *
 *                                                                        *
 *             File: config.php                                           *
 *        Copyright: (C) 2002-2015 4homepages.de                          *
 *            Email: jan@4homepages.de                                    *
 *              Web: http://www.4homepages.de                             *
 *    Scriptversion: 1.7.13                                                *
 *                                                                        *
 *    Never released without support from: Nicky (http://www.nicky.net)   *
 *                                                                        *
 **************************************************************************
 *                                                                        *
 *    Dieses Script ist KEINE Freeware. Bitte lesen Sie die Lizenz-       *
 *    bedingungen (Lizenz.txt) für weitere Informationen.                 *
 *    ---------------------------------------------------------------     *
 *    This script is NOT freeware! Please read the Copyright Notice       *
 *    (Licence.txt) for further information.                              *
 *                                                                        *
 *************************************************************************/

date_default_timezone_set("America/New_York");

$db_servertype = 'mysql';
$db_host = '[[softdbhost]]';
$db_name = '[[softdb]]';
$db_user = '[[softdbuser]]';
$db_password = '[[softdbpass]]';

$table_prefix = '[[dbprefix]]';

define("4IMAGES_ACTIVE", 1);

?>