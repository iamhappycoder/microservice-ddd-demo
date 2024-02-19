<?php

declare(strict_types=1);

namespace App\Domain\User\Transformer;

use App\Application\User\Request\CreateUserDto;
use App\Domain\User\Data\User;

class UserTransformer
{
    public static function fromCreateUserDto(CreateUserDto $createUserDto): User
    {
        return new User(
            $createUserDto->email,
            $createUserDto->firstName,
            $createUserDto->lastName
        );
    }
}
