<?php

declare(strict_types=1);

namespace App\Application\User\Request;
use Symfony\Component\Validator\Constraints as Assert;


readonly class CreateUserDto
{
    public function __construct(
        #[Assert\Email]
        public string $email,

        #[Assert\Type(type: "string")]
        public string $lastName,

        #[Assert\Type(type: "string")]
        public string $firstName,
    ) {
    }
}