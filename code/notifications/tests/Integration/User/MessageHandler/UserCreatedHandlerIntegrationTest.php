<?php

namespace Tests\Integration\User\MessageHandler;

use App\Application\User\MessageHandler\UserCreatedHandler;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Tests\Mother\UserMother;

class UserCreatedHandlerIntegrationTest extends KernelTestCase
{
    public function testInvokeSuccess(): void
    {
        $this->markTestIncomplete();

        //
        // Queue message.
        //

        //
        // Run handler.
        //
        $handler = $this->getContainer()->get(UserCreatedHandler::class);
        $handler(UserMother::getOneWithValidValues());

        //
        // Assert handler received one.
        //
    }
}
