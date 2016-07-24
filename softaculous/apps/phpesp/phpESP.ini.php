<?php

// use http or https?
$ESPCONFIG['proto'] = 'http://';

$ESPCONFIG['base_url'] = '[[softurl]]';

// Database connection information
// for the database type, change $ESPCONFIG['adodb_database_type'] (further down)
$ESPCONFIG['db_host'] = '[[softdbhost]]';
$ESPCONFIG['db_user'] = '[[softdbuser]]';
$ESPCONFIG['db_pass'] = '[[softdbpass]]';
$ESPCONFIG['db_name'] = '[[softdb]]';
$DB_PREFIX = "[[dbprefix]]";   // If you want your database tables to use a prefix, set it here.
$OLD_DB_PREFIX = "";   // When switching prefixes, give here the current existing prefix in the db

$ESPCONFIG['email_from_name'] = "[[site_name]]";
$ESPCONFIG['email_from_address'] = '[[admin_email]]';
// the email return path for bounces ...
$ESPCONFIG['email_return_path'] = '[[admin_email]]';

?>

