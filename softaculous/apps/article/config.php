<?php
$db_name ="[[softdb]]"; /** The name of the database for this install */
$dbusername = "[[softdbuser]]"; /** MySQL database username */
$dbpassword = "[[softdbpass]]"; /** MySQL database password */
$server = "[[softdbhost]]"; //** Probably don't need to change this */

$connection = mysql_connect($server, $dbusername, $dbpassword) or die(mysql_error());
$db = mysql_select_db($db_name,$connection)or die(mysql_error());
?>