<?php

declare(strict_types=1);

namespace App\Crm;

use App\Sender\SenderInterface;

/**
 * Class CrmManager
 * @package App
 */
final readonly class CrmManager implements CrmInterface
{
    public function __construct(
        private SenderInterface $client,
    ) {
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
