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
    ]

];