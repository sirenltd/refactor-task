<?php

declare(strict_types=1);

namespace App;

use App\DTO\SenderCredentialsDTO;
use InvalidArgumentException;

abstract class Sender implements SenderInterface
{
    public function __construct(protected SenderCredentialsDTO $settings)
    {
        $this->setCredentials($settings);
    }

    public function setCredentials(SenderCredentialsDTO $settings): void
    {
        if (empty($settings->user)) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings->passwd)) {
            throw new InvalidArgumentException('Password must be set!');
        }
        $this->settings = $settings;
    }

    public function getSettings(): SenderCredentialsDTO
    {
        return $this->settings;
    }

}