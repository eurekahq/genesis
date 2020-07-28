<?php
declare(strict_types=1);

namespace App\Domain\User;

use Doctrine\ORM\EntityRepository;

class UserRepository extends EntityRepository
{
    /**
     * @param int $id
     * @return User
     * @throws UserNotFoundException
     */
    public function findUserOfId(int $id): User {
        return $this->findOneBy(['id' => $id]);
    }
}
