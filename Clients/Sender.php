<?php

declare(strict_types=1);

namespace App\Clients;

use App\Interfaces\Client\ClientInterface;
use InvalidArgumentException;

//added abstract instead of final and implements interfacec that we could to use it in DI

abstract class Sender implements ClientInterface
{
    private array $settings;

    public function __construct(array $credentials)
    {
        $this->setCredentials($credentials);
    }


    //move this from CRMManager to Client's sender because this is the responsibility of this class

    public function setCredentials(array $settings)
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }
        $this->settings = $settings;
    }

    public function getCredentials(): array
    {
        return $this->settings;
    }

    abstract public function send(array $data): int;
}