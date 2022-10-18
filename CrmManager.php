<?php

declare(strict_types=1);

namespace App;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    private SenderInterface $client;

    public function __construct(SenderInterface $client)
    {
        $this->client = $client;
    }

    /**
     * Sends the person to a crm
     *
     * @param ClientEntity $clientEntity
     * @return int
     */
    public function sendPerson(ClientEntity $clientEntity): int
    {
        return $this->client->send($clientEntity);
    }
}
