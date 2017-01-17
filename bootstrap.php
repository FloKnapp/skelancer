<?php

require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$dbConf = [
    'type'     => 'mysql',
    'name'     => 'test',
    'username' => 'test',
    'password' => 'test',
    'host'     => 'localhost'
];

/** @var \Faulancer\Service\Config $config */
$config = \Faulancer\ServiceLocator\ServiceLocator::instance()->get(\Faulancer\Service\Config::class);
$config->set([
    'namespacePrefix' => 'App',
    'projectRoot'     => __DIR__,
    'viewsRoot'       => __DIR__ . '/template',
    'applicationRoot' => __DIR__ . '/src',
    'translationFile' => __DIR__ . '/config/translation.php',
    'routeFile'       => __DIR__ . '/config/routes.php',
    'db'              => $dbConf
]);

if (php_sapi_name() !== 'cli') {

    $request = new \Faulancer\Http\Request();
    $request->createFromHeaders();

    $kernel = new \Faulancer\Kernel($request, $config);
    echo $kernel->run();

}