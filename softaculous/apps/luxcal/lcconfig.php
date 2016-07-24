<?php
/*
= LuxCal event calendar configuration =
*/
$lcV="4.4.0M"; //LuxCal version
$dbType="MySQL"; //db type (MySQL or SQLite)
$dbHost="[[softdbhost]]"; //MySQL server
$dbUnam="[[softdbuser]]"; //database username
$dbPwrd="[[softdbpass]]"; //database password
$dbName="[[softdb]]"; //database name
$dbDef="mycal"; //default calendar (db name)
$dbSel=1; //selectable in Options panel
$crHost=0; //0:local, 1:remote, 2:remote+IP address
$crIpAd=""; //IP address of remote cron service
?>