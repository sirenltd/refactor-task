<?php

declare(strict_types=1);

namespace App\Tests\Crm;

use App\Crm\CrmManager;
use App\Dto\CredentialsDto;
use App\Sender\BazSender;
use InvalidArgumentException;
use PHPUnit\Framework\TestCase;

final class CrmManagerTest extends TestCase
{
    public function testFailIfMissingUsername(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('User must be set!');

        $crmManager = new CrmManager(
            $this->mockBazSender('', 'test')
        );

        $crmManager->sendPerson(['test']);
    }

    public function testFailIfMissingPassword(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Password must be set!');

        $crmManager = new CrmManager(
            $this->mockBazSender('test', '')
        );

        $crmManager->sendPerson(['test']);
    }

    public function testSuccess(): void
    {
        $crmManager = new CrmManager(
            $this->mockBazSender('test', 'test')
        );

        $response = $crmManager->sendPerson(['test person']);

        $this->assertSame(200, $response);
    }

    private function mockBazSender(
        string $username,
        string $password
    ): BazSender {
        return new BazSender(
            (new CredentialsDto(
                $username,
                $password
            ))
        );
    }
}