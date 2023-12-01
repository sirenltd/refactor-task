<?php

declare(strict_types=1);

namespace App;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager implements CrmInterface
{
    /**
     * @param BazSender $client
     */
    public function __construct(private readonly BazSender $client)
    {
    }

    /**
     * {@inheritdocs}
     */
    public function sendPerson(array $clientEntity): int
    {
        return $this->client->send($clientEntity);
    }
}
