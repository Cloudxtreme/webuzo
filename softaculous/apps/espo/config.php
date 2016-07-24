<?php
return [
    'cacheTimestamp' => [[timestamp]],
    'database' => [
        'driver' => 'pdo_mysql',
        'dbname' => '[[softdb]]',
        'user' => '[[softdbuser]]',
        'password' => '[[softdbpass]]',
        'port' => '',
        'host' => '[[softdbhost]]'
    ],
    'useCache' => true,
    'recordsPerPage' => 20,
    'recordsPerPageSmall' => 5,
    'applicationName' => 'EspoCRM',
    'version' => '4.1.3',
    'timeZone' => 'UTC',
    'dateFormat' => 'MM/DD/YYYY',
    'timeFormat' => 'HH:mm',
    'weekStart' => 0,
    'thousandSeparator' => ',',
    'decimalMark' => '.',
    'exportDelimiter' => ';',
    'currencyList' => [
        0 => 'USD'
    ],
    'defaultCurrency' => 'USD',
    'baseCurrency' => 'USD',
    'currencyRates' => [
        
    ],
    'outboundEmailIsShared' => false,
    'outboundEmailFromName' => '',
    'outboundEmailFromAddress' => '',
    'smtpServer' => '',
    'smtpPort' => '25',
    'smtpAuth' => false,
    'smtpSecurity' => '',
    'smtpUsername' => '',
    'smtpPassword' => '',
    'languageList' => [
        0 => 'en_US',
        1 => 'cs_CZ',
        2 => 'de_DE',
        3 => 'es_ES',
        4 => 'fr_FR',
        5 => 'id_ID',
        6 => 'nl_NL',
        7 => 'tr_TR',
        8 => 'ro_RO',
        9 => 'ru_RU',
        10 => 'pl_PL',
        11 => 'pt_BR',
        12 => 'uk_UA',
        13 => 'vi_VN'
    ],
    'language' => '[[language]]',
    'logger' => [
        'path' => 'data/logs/espo.log',
        'level' => 'WARNING',
        'rotation' => true,
        'maxFileNumber' => 30
    ],
    'authenticationMethod' => 'Espo',
    'globalSearchEntityList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity'
    ],
    'tabList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity',
        4 => 'Calendar',
        5 => 'Meeting',
        6 => 'Call',
        7 => 'Task',
        8 => 'Case',
        9 => 'Email',
        10 => 'Document',
        11 => 'Campaign',
        12 => 'KnowledgeBaseArticle'
    ],
    'quickCreateList' => [
        0 => 'Account',
        1 => 'Contact',
        2 => 'Lead',
        3 => 'Opportunity',
        4 => 'Meeting',
        5 => 'Call',
        6 => 'Task',
        7 => 'Case',
        8 => 'Email'
    ],
    'calendarDefaultEntity' => 'Meeting',
    'exportDisabled' => false,
    'assignmentEmailNotifications' => false,
    'assignmentEmailNotificationsEntityList' => [
        0 => 'Lead',
        1 => 'Opportunity',
        2 => 'Task',
        3 => 'Case'
    ],
    'assignmentNotificationsEntityList' => [
        0 => 'Meeting',
        1 => 'Call',
        2 => 'Task',
        3 => 'Email'
    ],
    'emailMessageMaxSize' => 10,
    'notificationsCheckInterval' => 10,
    'disabledCountQueryEntityList' => [
        0 => 'Email'
    ],
    'maxEmailAccountCount' => 2,
    'followCreatedEntities' => false,
    'b2cMode' => false,
    'restrictedMode' => false,
    'theme' => 'Espo',
    'massEmailMaxPerHourCount' => 100,
    'personalEmailMaxPortionSize' => 10,
    'inboundEmailMaxPortionSize' => 20,
    'authTokenLifetime' => 0,
    'authTokenMaxIdleTime' => 120,
    'userNameRegularExpression' => '[^a-z0-9\\-@_\\.\\s]',
    'addressFormat' => 1,
    'displayListViewRecordCount' => true,
    'dashboardLayout' => [
        0 => (object) [
            'name' => 'My Espo',
            'layout' => [
                0 => (object) [
                    'id' => 'default-activities',
                    'name' => 'Activities',
                    'x' => 2,
                    'y' => 2,
                    'width' => 2,
                    'height' => 2
                ],
                1 => (object) [
                    'id' => 'default-stream',
                    'name' => 'Stream',
                    'x' => 0,
                    'y' => 0,
                    'width' => 2,
                    'height' => 4
                ],
                2 => (object) [
                    'id' => 'default-tasks',
                    'name' => 'Tasks',
                    'x' => 2,
                    'y' => 0,
                    'width' => 2,
                    'height' => 2
                ]
            ]
        ]
    ],
    'isInstalled' => true,
    'siteUrl' => '[[softurl]]',
    'passwordSalt' => '[[passwordsalt]]',
    [[defaultPermissions]]
];
?>