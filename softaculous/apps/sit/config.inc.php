<?php
# config.inc.php - SiT! Config file generated automatically by setup.php on [[date]]

# Web Path
# The path to SiT! from the browsers perspective with a trailing slash. e.g. /sit/
$CONFIG['application_webpath'] = '[[relativeurl]]/';

# MySQL Database Username
$CONFIG['db_username'] = '[[softdbuser]]';

# MySQL Database Password
$CONFIG['db_password'] = '[[softdbpass]]';

# MySQL Database Name
$CONFIG['db_database'] = '[[softdb]]';

# MySQL Database Table Prefix
# Optionally prefix database table names with the a string (e.g. 'sit_', use this if the database you are using is shared with other applications
$CONFIG['db_tableprefix'] = '[[dbprefix]]';

# Attachment Filesystem Path
# The full absolute file system path to a directory to store attachments in (with a trailing slash). This directory should be writable
$CONFIG['attachment_fspath'] = '[[softpath]]/[[attachments]]/';

