<?php
//////////////////////////////////////////////////////////////
// quest pages
//////////////////////////////////////////////////////////////

$params['guestPages'] = [
    'POST' => [],
    'PUT' => [],
    'GET' => [],
    'DELETE' => [],
];


$params['guestPages']['GET'][] = '/api/test';
$params['guestPages']['GET'][] = '/api';

$params['guestPages']['POST'][] = '/api/admin/users';
$params['guestPages']['POST'][] = '/api/admin/users/login';
$params['guestPages']['POST'][] = '/api/admin/users/logout/(\d+)';

//////////////////////////////////////////////////////////////
// applicationManagerPages
//////////////////////////////////////////////////////////////
$params['applicationManagerPages'] = [
    'POST' => [],
    'PUT' => [],
    'GET' => [],
    'DELETE' => [],
];


$params['applicationManagerPages']['GET'][] = '/api/test';
$params['applicationManagerPages']['GET'][] = '/api';



$params['applicationManagerPages']['GET'][] = '/api/admin/users/(\d+)';
$params['applicationManagerPages']['PUT'][] = '/api/admin/users';
