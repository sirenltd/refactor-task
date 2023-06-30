<?php

declare(strict_types=1);

namespace App;

use App\Interfaces\Client\ClientInterface;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{
    private ClientInterface $client;

    // added DI to remove a client dependencies from the class

    public function __construct(ClientInterface $client)
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
