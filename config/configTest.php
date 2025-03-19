<?php

/*
 * NOTE: The following files are also to be updated
 *
 * api_/config/configTest.php
 * api_/config/config.php
 *
 *
 */
$params =  [
    'db' => [
        'host' => 'php_framework_mysql',
        'database' => 'test_db_name',
        'username' => 'root',
        'password' => 'root',
    ],
    
    'api_host' => 'php_framework_nginx', 

    'admin' => [
        'passwordSalt' => 'Example',
        'api_key_expires' => 900, //seconds = 15 min
    ],
    
    'setLogStatemnts' => false,
];

require __DIR__ . '/authorizations/list.php';

return $params;