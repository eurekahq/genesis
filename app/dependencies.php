<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Illuminate\Container\Container as IlluminateContainer;
use Illuminate\Database\Connection;
use Illuminate\Database\Connectors\ConnectionFactory;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

return function (ContainerBuilder $containerBuilder) {
    $containerBuilder->addDefinitions([
        LoggerInterface::class => function (ContainerInterface $c) {
            $settings = $c->get('settings');

            $loggerSettings = $settings['logger'];
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },

        // Database connection
        Connection::class => function (ContainerInterface $container) {
            $factory = new ConnectionFactory(new IlluminateContainer());

            $connection = $factory->make($container->get('settings')['db']);

            // Disable the query log to prevent memory issues
            $connection->disableQueryLog();

            return $connection;
        },

        PDO::class => function (ContainerInterface $container) {
            return $container->get(Connection::class)->getPdo();
        },
    ]);
};
