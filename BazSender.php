<?php

declare(strict_types=1);

namespace App;

use Symfony\Component\HttpFoundation\Response;
use InvalidArgumentException;

final class BazSender extends SenderDecorator
{
    public function send(array $data): int
    {
        //TODO: Do not implement a logic for send specifically. Imagine that she is here.
        return Response::HTTP_OK;
    }

    protected function validateSettings(array $settings): void
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }
    }
}
