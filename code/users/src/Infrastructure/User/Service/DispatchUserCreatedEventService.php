<?php

declare(strict_types=1);

namespace App\Infrastructure\User\Service;

use App\Domain\User\Data\User;
use App\Domain\User\Service\DispatchUserCreatedEventInterface;
use Symfony\Component\Messenger\MessageBusInterface;

class DispatchUserCreatedEventService implements DispatchUserCreatedEventInterface
{
    public function __construct(
        protected MessageBusInterface $messageBus,
    ) {
    }

    public function __invoke(User $user): void
    {
        ($this->messageBus)->dispatch($user);
    }
}
