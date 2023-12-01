<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

abstract class Sender 
{
    protected readonly array $config;

    /**
     * @param array $config;
     */
    public function __construct(array $config)
    {
        if (empty($config['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($config['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

        $this->config = $config;
    }

    abstract protected function send(array $data);
}
