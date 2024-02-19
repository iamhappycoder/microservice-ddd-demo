<?php

namespace Tests\Unit\Application\User\MessageHandler;

use App\Application\User\MessageHandler\UserCreatedHandler;
use App\Application\User\UseCase\LogUserCreatedMessageInterface;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Tests\Mother\UserMother;

class UserCreatedHandlerUnitTest extends TestCase
{
    public function testInvokeSuccess(): void
    {
        /** @var LogUserCreatedMessageInterface|MockObject $logUserCreatedMessageMock */
        $logUserCreatedMessageMock = $this->createMock(LogUserCreatedMessageInterface::class);
        $logUserCreatedMessageMock->expects($this->once())->method('__invoke')
            ->with(UserMother::getOneWithValidValues());

        (new UserCreatedHandler($logUserCreatedMessageMock))(UserMother::getOneWithValidValues());
    }
}
