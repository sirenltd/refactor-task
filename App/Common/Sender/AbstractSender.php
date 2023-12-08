<?php

declare(strict_types=1);

namespace App\Common\Sender;

abstract class AbstractSender implements SenderInterface
{
    abstract public function send(array $data): int;
}
