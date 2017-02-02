<?php

return [

    'namespacePrefix' => 'App',
    'projectRoot'     => __DIR__ . '/..',
    'viewsRoot'       => __DIR__ . '/../template',
    'applicationRoot' => __DIR__ . '/../src',
    'routes'          => require __DIR__ . '/routes.conf.php',
    'translation'     => require __DIR__ . '/translation.conf.php',
    'db'              => [
        'type'     => 'mysql',
        'name'     => 'test',
        'username' => 'test',
        'password' => 'test',
        'host'     => 'localhost'
    ],
    'auth' => [
        'authUrl'     => '/user/login',
        'registerUrl' => '/user/register',
        'authEntity'  => \App\Entity\UserEntity::class
    ]

];