<?php
if (!defined('STATUSNET') && !defined('LACONICA')) { exit(1); }

$config['site']['name'] = '[[site_name]]';

$config['site']['server'] = '[[domhost]]';
$config['site']['path'] = '[[relativeurl_]]'; 

$config['db']['database'] = 'mysqli://[[softdbuser]]:[[softdbpass]]@[[softdbhost]]/[[softdb]]';

$config['db']['type'] = 'mysql';

$config['site']['profile'] = '[[site_profile]]';

[[fancy]]

[[singleuser]]
