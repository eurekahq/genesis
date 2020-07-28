<?php

declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Logger;

return function (ContainerBuilder $containerBuilder) {
    // Global Settings Object
    $containerBuilder->addDefinitions([
        'settings' => [
            'displayErrorDetails' => true, // TODO Disable in production
            'logger' => [
                'name' => $_ENV['LOGGER_NAME'],
                'path' => isset($_ENV['docker']) ? 'php://stdout' : __DIR__ . '/../' . $_ENV['LOGGER_PATH'],
                'level' => constant(sprintf('%s::%s', Logger::class, $_ENV['LOGGER_LEVEL'])),
            ],
            'doctrine' => [
                // TODO Disable in production
                'dev_mode' => true,
                // TODO Enable in production
                'cache_dir' => null,
                // 'cache_dir' => __DIR__ . '/../var/cache/doctrine',
                // TODO Enable in production
                'proxy_dir' => null,
                // 'proxy_dir' => __DIR__ . '/../var/proxies',
                'metadata_dirs' => [__DIR__ . '/../src/Domain/'],
                'connection' => [
                    'driver'    => $_ENV['DB_DRIVER'],
                    'host'      => $_ENV['DB_HOST'],
                    'user'      => $_ENV['DB_USER'],
                    'password'  => $_ENV['DB_PASSWORD'],
                    'dbname'    => $_ENV['DB_NAME']
                ]
            ]
        ],
    ]);
};
