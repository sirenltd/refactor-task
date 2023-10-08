<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    private Sender $client;

    public function __construct(Sender $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the person to a crm
     *
     * @param array $clientEntity
     * @return int
     */
    public function sendPerson(array $clientEntity): int
    {
        return $this->client->send($clientEntity);
    }
}
