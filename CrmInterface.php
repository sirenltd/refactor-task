<?php

declare(strict_types=1);

namespace App;

interface CrmInterface
{
    /**
     * Sends the person to a crm
     *
     * @param array $clientEntity
     * @return int
     */
    public function sendPerson(array $clientEntity): int;
}
