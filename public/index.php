<?php

require_once __DIR__ . '/../vendor/autoload.php';

$config = [
    'namespacePrefix' => 'App',
    'projectRoot'     => __DIR__ . '/..',
    'viewsRoot'       => __DIR__ . '/../template',
    'applicationRoot' => __DIR__ . '/../src',
    'translationFile' => __DIR__ . '/../translation/translation.php',
    'routeCacheFile'  => __DIR__ . '/../cache/routes.json',
];

$request = new \Faulancer\Http\Request();
$request->createFromHeaders();

$kernel = new \Faulancer\Kernel($request, $config, false);
$kernel->run();
