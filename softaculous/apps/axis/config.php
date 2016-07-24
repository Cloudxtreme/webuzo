<?php

$config = array(
    'system' => array(
        'path'          => '[[softpath]]',
        'applyUpgrades' => false
    ),

    'crypt' => array(
        'key' => '[[cryptkey]]'
    ),

    'db' => array(
        'host'     => '[[softdbhost]]',
        'username' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'dbname'   => '[[softdb]]',
        'prefix'   => '[[dbprefix]]'
    ),

    'front' => array(
        'humanUrlAdapter' => "Readable"
    )
);
