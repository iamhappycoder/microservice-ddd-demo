<?php

declare(strict_types=1);

namespace App\Application\User\UseCase;

use App\Domain\User\Data\User;

interface LogUserCreatedMessageInterface
{
    public function __invoke(User $user): void;
}