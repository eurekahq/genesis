<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use App\Models\User;
use Psr\Http\Message\ResponseInterface as Response;

class ListUsersAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        // Using dependency injection, see App\Domain\User namespace
        // $users = $this->userRepository::all();

        // Bypass the injected UserRepository and use Eloquent model directly
        $users = User::all();

        $this->logger->info("Users list was viewed.");

        return $this->respondWithData($users);
    }
}