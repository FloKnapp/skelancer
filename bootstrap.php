<?php

require_once __DIR__ . '/vendor/autoload.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

/** @var \Faulancer\Service\Config $config */
$config = \Faulancer\ServiceLocator\ServiceLocator::instance()->get(\Faulancer\Service\Config::class);

$config->set(require __DIR__ . '/config/app.conf.php');

if (php_sapi_name() !== 'cli') {

    $request = new \Faulancer\Http\Request();
    $request->createFromHeaders();

    $kernel = new \Faulancer\Kernel($request, $config);
    echo $kernel->run();

}