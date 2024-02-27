<?php

declare(strict_types=1);

namespace App\Sender;

interface SenderInterface
{
    public function send(array $data): int;
}
