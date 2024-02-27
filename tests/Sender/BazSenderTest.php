<?php

declare(strict_types=1);

namespace App\Tests\Sender;

use App\Dto\CredentialsDto;
use App\Sender\BazSender;
use PHPUnit\Framework\TestCase;

final class BazSenderTest extends TestCase
{
    public function testSuccess(): void
    {
        $credentials = new CredentialsDto(
            'test',
            'test',
        );

        $sender = new BazSender($credentials);

        $response  = $sender->send([]);

        $this->assertSame(200, $response);
    }
}