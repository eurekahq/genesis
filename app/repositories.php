<?php

declare(strict_types=1);

use App\Domain\User\UserRepository;
use App\Factory\RepositoryFactory;
use DI\ContainerBuilder;

use function DI\factory;

return function (ContainerBuilder $containerBuilder) {
    // Get an EntityRepository from our RepositoryFactory
    $containerBuilder->addDefinitions([
        UserRepository::class => factory(RepositoryFactory::class),
    ]);
};
