<?php


include_once __DIR__ . '/../vendor/autoload.php';

$classLoader = new \Composer\Autoload\ClassLoader();
$classLoader->addPsr4("Smatpay\\", dirname(__DIR__) . '/src/', true);
$classLoader->register();
