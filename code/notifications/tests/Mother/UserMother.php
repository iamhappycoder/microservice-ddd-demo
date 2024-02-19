<?php

namespace Tests\Mother;

use App\Domain\User\Data\User;

class UserMother
{
    public static function getOneWithValidValues(): User
    {
        return new User('christopher.pike@starfleet.mil', 'Christopher', 'Pike');
    }
}