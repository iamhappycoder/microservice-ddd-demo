<?php

declare(strict_types=1);

namespace App\Domain\User\Service;

use App\Domain\User\Data\User;

interface LogUserCreatedInterface
{
    public function __invoke(User $user): void;
}
