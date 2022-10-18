<?php

declare(strict_types=1);

namespace App;

class BazSender extends Sender
{
    /**
     * Sends data to the Baz crm
     *
     * @param Entity $entity
     * @return int
     */
    public function send(Entity $entity): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that she is here.

        return 200;
    }
}
