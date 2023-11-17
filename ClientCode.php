<?php

namespace App;

use App\DTO\SenderCredentialsDTO;
use App\Entity\Client as ClientEntity;

class ClientCode
{
    public function indexAction(): void
    {
        $senderCredentialsDto = new SenderCredentialsDTO('user', 'pass');
        $bazSender = new BazSender($senderCredentialsDto);

        $crmManager = new CrmManager($bazSender);
        $crmManager->sendPerson(new ClientEntity());
    }
}