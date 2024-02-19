<?php

declare(strict_types=1);

namespace App\Domain\User\Data;

readonly class User
{
    public function __construct(
        public string $email,
        public string $firstName,
        public string $lastName,
    ) {
    }
}
