<?php

declare(strict_types=1);

namespace App;

interface SenderInterface
{
    function send(array $data): int;
}