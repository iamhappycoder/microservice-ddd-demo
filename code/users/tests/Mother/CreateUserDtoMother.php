<?php

namespace Tests\Mother;

use App\Application\User\Request\CreateUserDto;

class CreateUserDtoMother
{
    public static function getValidUser(): CreateUserDto
    {
        return new CreateUserDto(
            'james.kirk@starfleet.mil',
            'James',
            'Kirk',
        );
    }
}
