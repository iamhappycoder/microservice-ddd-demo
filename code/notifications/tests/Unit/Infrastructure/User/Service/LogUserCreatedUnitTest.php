<?php

namespace Tests\Unit\Infrastructure\User\Service;

use App\Infrastructure\User\Service\LogUserCreatedService;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use Tests\Mother\UserMother;

class LogUserCreatedUnitTest extends TestCase
{
    public function testInvokeSuccess(): void
    {
        $loggerMock = $this->createMock(LoggerInterface::class);
        $loggerMock->expects($this->once())->method('debug')
            ->with('Message received', ['user' => UserMother::getOneWithValidValues()]);

        (new LogUserCreatedService($loggerMock))(UserMother::getOneWithValidValues());
    }
}
