<?php

namespace Tests\Functional\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Tests\Mother\UserPayloadMother;

class CreateUserControllerFunctionalTest extends WebTestCase
{
    public function testCreateUserFailureMissingEmail(): void
    {
        $client = static::createClient();
        $client->request('POST', '/users', UserPayloadMother::getUserWithNoEmail());

        $this->assertEquals(422, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"status":"failure","message":"This value should be of type unknown."}', $client->getResponse()->getContent());
    }

    public function testCreateUserFailureInvalidEmail(): void
    {
        $client = static::createClient();
        $client->request('POST', '/users', UserPayloadMother::getUserWithInvalidEmail());

        $this->assertEquals(422, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"status":"failure","message":"This value is not a valid email address."}', $client->getResponse()->getContent());
    }

    public function testCreateUserFailureMissingFirstname(): void
    {
        $client = static::createClient();
        $client->request('POST', '/users', UserPayloadMother::getUserWithNoFirstname());

        $this->assertEquals(422, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"status":"failure","message":"This value should be of type unknown."}', $client->getResponse()->getContent());
    }

    public function testCreateUserFailureMissingLastname(): void
    {
        $client = static::createClient();
        $client->request('POST', '/users', UserPayloadMother::getUserWithNoLastname());

        $this->assertEquals(422, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"status":"failure","message":"This value should be of type unknown."}', $client->getResponse()->getContent());
    }

    public function testCreateUserSuccess()
    {
        $client = static::createClient();
        $client->request('POST', '/users', UserPayloadMother::getValidUser());

        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals('{"status":"success"}', $client->getResponse()->getContent());
    }
}
