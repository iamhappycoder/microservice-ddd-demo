<?php

namespace Tests\Mother;

class UserPayloadMother
{
    public static function getValidUser(): array
    {
        return [
            'email' => 'christopher.pike@starfleet.mil',
            'firstName' => 'Christopher',
            'lastName' => 'Pike',
        ];
    }

    public static function getUserWithNoEmail(): array
    {
        return [
            'firstName' => 'Christopher',
            'lastName' => 'Pike',
        ];
    }

    public static function getUserWithNoFirstname(): array
    {
        return [
            'email' => 'christopher.pike@starfleet.mil',
            'lastName' => 'Pike',
        ];
    }

    public static function getUserWithNoLastname(): array
    {
        return [
            'email' => 'christopher.pike@starfleet.mil',
            'firstName' => 'Christopher',
        ];
    }

    public static function getUserWithInvalidEmail(): array
    {
        return [
            'email' => 'christopher.pike',
            'firstName' => 'Christopher',
            'lastName' => 'Pike',
        ];
    }
}

