<?php

declare(strict_types=1);

namespace App\Application\User\MessageHandler;
use App\Application\User\UseCase\LogUserCreatedMessageInterface;
use App\Domain\User\Data\User;
use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class UserCreatedHandler
{
    public function __construct(
        protected LogUserCreatedMessageInterface $logUserCreatedMessage
    ) {
    }

    public function __invoke(User $user): void
    {
        ($this->logUserCreatedMessage)($user);
    }
}
