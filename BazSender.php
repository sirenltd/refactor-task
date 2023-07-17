<?php

declare(strict_types=1);

namespace App;

final class BazSender extends Sender implements SenderInterface
{
    /**
     * Sends data to the Baz crm
     */
    public function send(array $data): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return 200;
    }
}
