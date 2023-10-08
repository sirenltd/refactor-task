<?php

declare(strict_types=1);

namespace App;

/**
 * One of the strategies of realization Sender class
 */
class BazSender extends Sender
{
    /**
     * Sends data to the Baz crm
     *
     * @param array $data
     * @return int HTTPStatus
     */
    public function send(array $data): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.

        return \HttpStatuses::HTTP_STATE_OK;
    }
}
