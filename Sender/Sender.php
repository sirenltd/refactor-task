<?php

declare(strict_types=1);

namespace App\Sender;

/**
 * Class Sender
 * @package App\Sender
 */
abstract class Sender implements SenderInterface
{
    /**
     * @var array
     */
    protected array $credentials;

    /**
     * @param array $credentials
     */
    public function __construct(array $credentials)
    {
        $this->setCredentials($credentials);
    }

    /**
     * @param array $credentials
     * @return void
     */
    protected function setCredentials(array $credentials): void
    {
        $this->validateCredentials($credentials);
        $this->credentials = $credentials;
    }

    /**
     * @param array $data
     * @return int
     */
    abstract public function send(array $data): int;

    /**
     * @param array $credentials
     */
    abstract protected function validateCredentials(array $credentials);
}