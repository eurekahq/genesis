<?php
declare(strict_types=1);

namespace App\Application\Actions\User;

use App\Models\User;
use Psr\Http\Message\ResponseInterface as Response;

class ViewUserAction extends UserAction
{
    /**
     * {@inheritdoc}
     */
    protected function action(): Response
    {
        $userId = (int) $this->resolveArg('id');

        // Using dependency injection, see App\Domain\User namespace
        // $users = $this->userRepository::find($userId);

        // Bypass the injected UserRepository and use Eloquent model directly
        $user = User::find($userId);

        // TODO check for null and throw \App\Domain\User\UserNotFoundException accordingly

        $this->logger->info("User of id `${userId}` was viewed.");

        return $this->respondWithData($user);
    }
}
