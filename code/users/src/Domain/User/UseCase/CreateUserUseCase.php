<?php

declare(strict_types=1);

namespace App\Domain\User\UseCase;

use App\Application\User\Request\CreateUserDto;
use App\Application\User\UseCase\CreateUserUseCaseInterface;
use App\Domain\User\Service\DispatchUserCreatedEventInterface;
use App\Domain\User\Service\LogUserCreatedInterface;
use App\Domain\User\Transformer\UserTransformer;

class  CreateUserUseCase implements CreateUserUseCaseInterface
{
    public function __construct(
        protected LogUserCreatedInterface $logUserCreated,
        protected DispatchUserCreatedEventInterface $dispatchUserCreatedEvent,
    ) {
    }

    public function __invoke(CreateUserDto $createUserDto): void
    {
        $user = UserTransformer::fromCreateUserDto($createUserDto);

        //
        // Just log user creation instead of persisting to db.
        //
        ($this->logUserCreated)($user);

        //
        // Send to the Notification Service.
        //
        ($this->dispatchUserCreatedEvent)($user);
    }
}
