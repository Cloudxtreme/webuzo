<?php
$config->installed       = true;
$config->debug           = false;
$config->requestType     = 'PATH_INFO';
$config->db->host        = '[[softdbhost]]';
$config->db->port        = '3306';
$config->db->name        = '[[softdb]]';
$config->db->user        = '[[softdbuser]]';
$config->db->password    = '[[softdbpass]]';
$config->db->prefix      = '[[dbprefix]]';
$config->webRoot         = getWebRoot();
$config->default->lang   = '[[language]]';