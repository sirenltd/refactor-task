<?php

declare(strict_types=1);

namespace App\Modules\CRM\Baz;

class BazCrmManager implements CrmManagerInterface
{
    private SenderInterface $client;

    public function __construct(SenderInterface $client)
    {
        $this->client = $client;
    }

    public function send(array $data): int
    {
        return $this->client->send($data);
    }
}
