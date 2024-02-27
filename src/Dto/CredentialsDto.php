<?php

declare(strict_types=1);

namespace App\Dto;

use InvalidArgumentException;

final readonly class CredentialsDto
{
    public function __construct(
        public string $username,
        public string $password,
    ) {
        if (empty($username)) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($password)) {
            throw new InvalidArgumentException('Password must be set!');
        }
    }
}