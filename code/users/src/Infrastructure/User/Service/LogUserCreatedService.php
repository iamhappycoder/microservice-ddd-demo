<?php

declare(strict_types=1);

namespace App\Infrastructure\User\Service;

use App\Domain\User\Data\User;
use App\Domain\User\Service\LogUserCreatedInterface;
use Psr\Log\LoggerInterface;

class LogUserCreatedService implements LogUserCreatedInterface
{
    public function __construct(
        protected LoggerInterface $logger,
    ) {
    }

    public function __invoke(User $user): void
    {
        $this->logger->debug('User created', ['user' => $user]);
    }
}
