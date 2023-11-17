<?php

declare(strict_types=1);

namespace App;

use App\Entity\Client as ClientEntity;

/**
 * Class CrmManager
 * @package App
 */
readonly class CrmManager implements CrmManagerInterface
{

    public function __construct(private Sender $client)
    {
    }

    /**
     * Sends the person to a crm
     */
    public function sendPerson(ClientEntity $clientEntity): int
    {
        return $this->client->send($clientEntity);
    }
}
