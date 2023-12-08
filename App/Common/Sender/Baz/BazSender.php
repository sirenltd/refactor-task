<?php

declare(strict_types=1);

namespace App\Common\Sender\Baz;

use App\Common\Sender\AbstractSender;
use App\Common\Sender\SenderInterface;

class BazSender extends AbstractSender implements SenderInterface
{
    // We can use cURL or Guzzle or any other client
    private $httpClient;

    public function __construct($httpClient)
    {
        // Client configuration will be prepared into Di
        $this->httpClient = $httpClient;
    }

    public function send(array $data): int
    {
        //@todo Do not implement a logic for send specifically. Imagine that it's here.
        
        return 200;
    }
}
