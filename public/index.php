<?php

require_once __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

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
echo $kernel->run();
