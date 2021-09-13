<?php

namespace App\Sender;

interface SenderInterface
{

    public function __construct(array $settings);

    public function send(array $data): int;

}
