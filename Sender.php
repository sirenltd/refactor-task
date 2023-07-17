<?php

declare(strict_types=1);

namespace App;

abstract class Sender
{
    protected Credentials $credentials;

    public function setCredentials(Credentials $credentials): void
    {
        $this->credentials = $credentials;
    }
}