<?php

declare(strict_types=1);

namespace App;

abstract class Sender
{
    protected CredentialsDto $settings;

    public function setCredentials(CredentialsDto $settings)
    {
        $this->settings = $settings;
    }

    abstract function send(array $data): int;
}