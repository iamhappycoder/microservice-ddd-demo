<?php

declare(strict_types=1);

namespace App\Application\User\UseCase;

use App\Application\User\Request\CreateUserDto;

/**
 * Creates a user, logs the creation, and sends the event to the Notification Service.
 */
interface CreateUserUseCaseInterface
{
    public function __invoke(CreateUserDto $createUserDto): void;
}
