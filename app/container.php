<?php

use DI\ContainerBuilder;

require_once __DIR__ . '/../init.php';

$containerBuilder = new ContainerBuilder();

if (false) {
    //  TODO Enable in production
    $containerBuilder->enableCompilation(__DIR__ . '/../var/cache');
}

// Set up settings
$settings = require __DIR__ . '/../app/settings.php';
$settings($containerBuilder);

// Set up dependencies
$dependencies = require __DIR__ . '/../app/dependencies.php';
$dependencies($containerBuilder);

// Set up doctrine
$doctrine = require __DIR__ . '/../app/bootstrap.php';
$doctrine($containerBuilder);

// Set up repositories
$repositories = require __DIR__ . '/../app/repositories.php';
$repositories($containerBuilder);

// Build PHP-DI Container instance
return $containerBuilder->build();
