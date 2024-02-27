<?php

declare(strict_types=1);

namespace App\Sender;

abstract class Sender implements SenderInterface
{
    abstract public function send(array $data): int;
}
