<?php

declare(strict_types=1);

namespace App;

use App\Entity\Client as ClientEntity;

class BazSender extends Sender
{
    /**
     * Sends data to the Baz crm
     */
    public function send(ClientEntity $data): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }
}
