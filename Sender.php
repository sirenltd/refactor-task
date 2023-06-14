<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

abstract class Sender implements SenderInterface
{
    protected array $settings;

    public function __construct(array $settings)
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

        $this->settings = $settings;
    }
}
