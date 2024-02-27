<?php

declare(strict_types=1);

namespace App\Crm;

interface CrmInterface
{
    public function sendPerson(array $clientEntity): int;
}