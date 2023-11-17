<?php

namespace App;

use App\Entity\Client as ClientEntity;

interface CrmManagerInterface
{
    public function sendPerson(ClientEntity $clientEntity): int;
}