<?php

return array(
    'default-connection' => 'concrete',
    'connections' => array(
        'concrete' => array(
            'driver' => 'c5_pdo_mysql',
            'server' => '[[softdbhost]]',
            'database' => '[[softdb]]',
            'username' => '[[softdbuser]]',
            'password' => '[[softdbpass]]',
            'charset' => 'utf8',
        ),
    ),
);
