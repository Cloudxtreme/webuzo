<?php
if (!defined("_ECRIRE_INC_VERSION")) return;
defined('_MYSQL_SET_SQL_MODE') || define('_MYSQL_SET_SQL_MODE',true);
$GLOBALS['spip_connect_version'] = 0.8;
spip_connect_db('[[softdbhost]]','','[[softdbuser]]','[[softdbpass]]','[[softdb]]','mysql', '[[dbprefix]]','','utf8');
?>