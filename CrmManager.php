<?php

declare(strict_types=1);

namespace App;

final class CrmManager
{
    private SenderInterface $client;

    public function __construct(SenderInterface $decorator)
    {
        $this->client = $decorator;
    }

    public function sendPerson(array $clientEntity): int
    {
        return $this->client->send($clientEntity);
    }
}
