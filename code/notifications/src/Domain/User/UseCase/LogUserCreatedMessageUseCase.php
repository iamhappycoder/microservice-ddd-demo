<?php

declare(strict_types=1);

namespace App\Domain\User\UseCase;

use App\Application\User\UseCase\LogUserCreatedMessageInterface;
use App\Domain\User\Data\User;
use App\Domain\User\Service\LogUserCreatedInterface;

class LogUserCreatedMessageUseCase implements LogUserCreatedMessageInterface
{
    public function __construct(
        protected LogUserCreatedInterface $logUserCreated,
    ) {
    }

    public function __invoke(User $user): void
    {
        ($this->logUserCreated)($user);
    }
}