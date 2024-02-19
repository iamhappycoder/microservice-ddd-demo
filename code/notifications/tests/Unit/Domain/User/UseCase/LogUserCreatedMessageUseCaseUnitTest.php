<?php

namespace Tests\Unit\Domain\User\UseCase;

use App\Domain\User\Service\LogUserCreatedInterface;
use App\Domain\User\UseCase\LogUserCreatedMessageUseCase;
use PHPUnit\Framework\TestCase;
use Tests\Mother\UserMother;

class LogUserCreatedMessageUseCaseUnitTest extends TestCase
{
    public function testInvokeSuccess(): void
    {
        $logUserCreatedMock = $this->createMock(LogUserCreatedInterface::class);
        $logUserCreatedMock->expects($this->once())->method('__invoke')
            ->with(UserMother::getOneWithValidValues());

        (new LogUserCreatedMessageUseCase($logUserCreatedMock))(UserMother::getOneWithValidValues());
    }
}
