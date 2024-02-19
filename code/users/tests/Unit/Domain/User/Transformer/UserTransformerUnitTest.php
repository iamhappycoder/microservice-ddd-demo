<?php

namespace Tests\Unit\Domain\User\Transformer;

use App\Domain\User\Transformer\UserTransformer;
use PHPUnit\Framework\TestCase;
use Tests\Mother\CreateUserDtoMother;
use Tests\Mother\UserPayloadMother;

class UserTransformerUnitTest extends TestCase
{
    public function testInvokeSuccess(): void
    {
        $user = UserTransformer::fromCreateUserDto(CreateUserDtoMother::getValidUser());

        $this->assertEquals('james.kirk@starfleet.mil', $user->email);
        $this->assertEquals('James', $user->firstName);
        $this->assertEquals('Kirk', $user->lastName);
    }
}