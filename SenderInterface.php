<?php

namespace App;
interface SenderInterface
{
    /**
     * @param array $data
     * @return int
     */
    public function send(array $data): int;

    /**
     * @param Credentials $credentials
     * @return void
     */
    public function setCredentials(Credentials $credentials): void;
}