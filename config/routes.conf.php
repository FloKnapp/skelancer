<?php

return [

    'homepage' => [
        'path'       => '/',
        'method'     => 'GET',
        'action'     => 'index',
        'controller' => \App\Controller\WebsiteController::class
    ],
    'contact' => [
        'path'       => '/contact',
        'method'     => 'GET',
        'action'     => 'contact',
        'controller' => \App\Controller\WebsiteController::class
    ],
    'test' => [
        'path'       => '/test/(\w+)',
        'method'     => 'GET',
        'action'     => 'test',
        'controller' => \App\Controller\WebsiteController::class
    ],
    'article' => [
        'path'       => '/article/(\d+)',
        'method'     => 'GET',
        'action'     => 'article',
        'controller' => \App\Controller\WebsiteController::class
    ],
    'categories' => [
        'path'       => '/categories',
        'method'     => 'GET',
        'action'     => 'categories',
        'controller' => \App\Controller\WebsiteController::class
    ],
    'category' => [
        'path'       => '/category/(\d+)',
        'method'     => 'GET',
        'action'     => 'category',
        'controller' => \App\Controller\WebsiteController::class
    ],
    'userLogin' => [
        'path'       => '/user/login',
        'method'     => 'GET',
        'action'     => 'userLogin',
        'controller' => \App\Controller\WebsiteController::class
    ],
    'userLogout' => [
        'path'       => '/user/logout',
        'method'     => 'GET',
        'action'     => 'userLogout',
        'controller' => \App\Controller\WebsiteController::class
    ]

];