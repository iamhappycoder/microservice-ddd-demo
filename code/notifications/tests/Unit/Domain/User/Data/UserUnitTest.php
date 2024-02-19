<?php

namespace Test\Domain\User\Data;

use PHPUnit\Framework\TestCase;
use Tests\Mother\UserMother;

class UserUnitTest extends TestCase
{
    public function testValidObject(): void
    {
        $user = UserMother::getOneWithValidValues();

        $this->assertEquals('christopher.pike@starfleet.mil', $user->email);
        $this->assertEquals('Christopher', $user->firstName);
        $this->assertEquals('Pike', $user->lastName);
    }
}
