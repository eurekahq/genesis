<?php

declare(strict_types=1);

namespace App\Factory;

use DI\Factory\RequestedEntry;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;

class RepositoryFactory
{
    public function __invoke(EntityManagerInterface $entityManager, RequestedEntry $entry): EntityRepository
    {
        // Entities MUST be defined in the same namespace as repositories.
        $entityClass = preg_replace('/Repository$/', '', $entry->getName());

        return $entityManager->getRepository($entityClass);
    }
}
